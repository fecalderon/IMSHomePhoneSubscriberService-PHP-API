<?php
    class Subscribers extends Controller {
        public function __construct(){
            $this->subscriberModel = $this->model('Subscriber');
        }

        public function index(){
            // Get subscribers
            $subscribers = $this->subscriberModel->getSubscribers();

            $data = [
                'subscribers' => $subscribers
            ];

            $this->view('subscribers/index', $data);
        }

        public function add(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                // Sanitize POST Array
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'phoneNumber' => trim($_POST['phoneNumber']),
                    'username' => trim($_POST['username']),
                    'password' => trim($_POST['password']),
                    'domain' => trim($_POST['domain']),
                    'status' => trim($_POST['status']),
                    'phoneNumber_err' => '',
                    'username_err' => '',
                    'password_err' => '',
                    'domain_err' => '',
                    'status_err' => ''
                ];

                // Validate Data
                if(empty($data['phoneNumber'])){
                    $data['phoneNumber_err'] = 'Please enter phone number';
                }
                if(empty($data['username'])){
                    $data['username_err'] = 'Please enter username';
                }
                if(empty($data['password'])){
                    $data['password_err'] = 'Please enter password';
                }
                if(empty($data['domain'])){
                    $data['domain_err'] = 'Please enter domain';
                }
                if(empty($data['status'])){
                    $data['status_err'] = 'Please select status';
                }

                // Make sure no Errors
                if(empty($data['phoneNumber_err']) && empty($data['username_err']) && empty($data['password_err']) && empty($data['domain_err']) && empty($data['status_err'])){
                    // Validated
                    if($this->subscriberModel->addSubscriber($data)){
                        flash('subscriber_message', 'Subscriber has been added!');
                        redirect('subscribers');
                    } else {
                        die('Something went wrong!');
                    }
                } else {
                    // Load view with errors
                    $this->view('subscribers/add', $data);
                }
            } else {
                $data = [
                    'phoneNumber' => '',
                    'username' => '',
                    'password' => '',
                    'domain' => '',
                    'status' => ''
                ];
                $this->view('subscribers/add', $data);
            };
        }

        public function show($id){
            $subscriber = $this->subscriberModel->getSubscriberById($id);
            $data = [
                'subscriber' => $subscriber
            ];

            $this->view('subscribers/show', $data);

        }

        public function edit($id){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                // Sanitize POST Array
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'phoneNumber' => $id,
                    'username' => trim($_POST['username']),
                    'password' => trim($_POST['password']),
                    'domain' => trim($_POST['domain']),
                    'status' => trim($_POST['status']),
                    'username_err' => '',
                    'password_err' => '',
                    'domain_err' => '',
                    'status_err' => ''
                ];

                // Validate Data
                if(empty($data['username'])){
                    $data['username_err'] = 'Please enter username';
                }
                if(empty($data['password'])){
                    $data['password_err'] = 'Please enter password';
                }
                if(empty($data['domain'])){
                    $data['domain_err'] = 'Please enter domain';
                }
                if(empty($data['status'])){
                    $data['status_err'] = 'Please select status';
                }

                // Make sure no Errors
                if(empty($data['username_err']) && empty($data['password_err']) && empty($data['domain_err']) && empty($data['status_err'])){
                    // Validated
                    if($this->subscriberModel->updateSubscriber($data)){
                        flash('subscriber_message', 'Subscriber\'s details has been updated!');
                        redirect('subscribers');
                    } else {
                        die('Something went wrong!');
                    }
                } else {
                    // Load view with errors
                    $this->view('subscribers/edit', $data);
                }
            } else {
                // Get existing data from model
                $subscriber = $this->subscriberModel->getSubscriberById($id);
                $data = [
                    'phoneNumber' => $subscriber->phoneNumber,
                    'username' => $subscriber->username,
                    'password' => $subscriber->password,
                    'domain' => $subscriber->domain,
                    'status' => $subscriber->status
                ];
                $this->view('subscribers/edit', $data);
            };
        }

        public function delete($id){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if($this->subscriberModel->deleteSubscriber($id)){
                    flash('subscriber_message', 'Subscriber has been removed!');
                    redirect('subscribers');
                } else {
                    die('Something went wrong!');
                }
            } else {
                redirect('subscribers');
            }
        }
    }