 <!--**********************************
            Nav header start
        ***********************************-->
 <div class="nav-header">
     <a href="{{ url('/') }}" class="brand-logo">
         <img class="logo-abbr" src="{{ asset('xhtml/images/logo.png') }}" style="font-weight: bold; border-radius: 50%;"
             width="100">
         {{-- <img class="brand-title" src="{{ asset('xhtml/images/logo-text.png') }}" style="font-weight: bold;"> --}}

     </a>

     <div class="nav-control">
         <div class="hamburger">
             <span class="line"></span><span class="line"></span><span class="line"></span>
         </div>
     </div>
 </div>
 <!--**********************************
            Nav header end
        ***********************************-->

 <!--**********************************
            Chat box start
        ***********************************-->
 <div class="chatbox">
     <div class="chatbox-close"></div>
     <div class="custom-tab-1">
         <ul class="nav nav-tabs">
             <li class="nav-item">
                 <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
             </li>
         </ul>
         <div class="tab-content">
             <div class="tab-pane fade active show" id="chat" role="tabpanel">
                 <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                     <div class="card-header chat-list-header text-center">
                         <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                 viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                     <rect fill="#000000" x="4" y="11" width="16" height="2"
                                         rx="1" />
                                     <rect fill="#000000" opacity="0.3"
                                         transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                         x="4" y="11" width="16" height="2" rx="1" />
                                 </g>
                             </svg></a>
                         <div>
                             <h6 class="mb-1">Chat List</h6>
                             <p class="mb-0">Show All</p>
                         </div>
                         <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                 viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                     <rect x="0" y="0" width="24" height="24" />
                                     <circle fill="#000000" cx="5" cy="12" r="2" />
                                     <circle fill="#000000" cx="12" cy="12" r="2" />
                                     <circle fill="#000000" cx="19" cy="12" r="2" />
                                 </g>
                             </svg></a>
                     </div>
                     <div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
                         <ul class="contacts">
                             <li class="name-first-letter">A</li>
                             <li class="active dz-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="images/avatar/1.jpg" class="rounded-circle user_img"
                                             alt="" />
                                         <span class="online_icon"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Archie Parker</span>
                                         <p>Kalid is online</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dz-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="images/avatar/2.jpg" class="rounded-circle user_img"
                                             alt="" />
                                         <span class="online_icon offline"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Alfie Mason</span>
                                         <p>Taherah left 7 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dz-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="images/avatar/3.jpg" class="rounded-circle user_img"
                                             alt="" />
                                         <span class="online_icon"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>AharlieKane</span>
                                         <p>Sami is online</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dz-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="images/avatar/4.jpg" class="rounded-circle user_img"
                                             alt="" />
                                         <span class="online_icon offline"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Athan Jacoby</span>
                                         <p>Nargis left 30 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="name-first-letter">B</li>
                             <li class="dz-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="images/avatar/5.jpg" class="rounded-circle user_img"
                                             alt="" />
                                         <span class="online_icon offline"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Bashid Samim</span>
                                         <p>Rashid left 50 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dz-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="images/avatar/1.jpg" class="rounded-circle user_img"
                                             alt="" />
                                         <span class="online_icon"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Breddie Ronan</span>
                                         <p>Kalid is online</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dz-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="images/avatar/2.jpg" class="rounded-circle user_img"
                                             alt="" />
                                         <span class="online_icon offline"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Ceorge Carson</span>
                                         <p>Taherah left 7 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="name-first-letter">D</li>
                             <li class="dz-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="images/avatar/3.jpg" class="rounded-circle user_img"
                                             alt="" />
                                         <span class="online_icon"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Darry Parker</span>
                                         <p>Sami is online</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dz-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="images/avatar/4.jpg" class="rounded-circle user_img"
                                             alt="" />
                                         <span class="online_icon offline"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Denry Hunter</span>
                                         <p>Nargis left 30 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="name-first-letter">J</li>
                             <li class="dz-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="images/avatar/5.jpg" class="rounded-circle user_img"
                                             alt="" />
                                         <span class="online_icon offline"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Jack Ronan</span>
                                         <p>Rashid left 50 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dz-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="images/avatar/1.jpg" class="rounded-circle user_img"
                                             alt="" />
                                         <span class="online_icon"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Jacob Tucker</span>
                                         <p>Kalid is online</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dz-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="images/avatar/2.jpg" class="rounded-circle user_img"
                                             alt="" />
                                         <span class="online_icon offline"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>James Logan</span>
                                         <p>Taherah left 7 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dz-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="images/avatar/3.jpg" class="rounded-circle user_img"
                                             alt="" />
                                         <span class="online_icon"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Joshua Weston</span>
                                         <p>Sami is online</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="name-first-letter">O</li>
                             <li class="dz-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="images/avatar/4.jpg" class="rounded-circle user_img"
                                             alt="" />
                                         <span class="online_icon offline"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Oliver Acker</span>
                                         <p>Nargis left 30 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dz-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="images/avatar/5.jpg" class="rounded-circle user_img"
                                             alt="" />
                                         <span class="online_icon offline"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Oscar Weston</span>
                                         <p>Rashid left 50 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="card chat dz-chat-history-box d-none">
                     <div class="card-header chat-list-header text-center">
                         <a href="javascript:;" class="dz-chat-history-back">
                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                     <polygon points="0 0 24 0 24 24 0 24" />
                                     <rect fill="#000000" opacity="0.3"
                                         transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
                                         x="14" y="7" width="2" height="10"
                                         rx="1" />
                                     <path
                                         d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                         fill="#000000" fill-rule="nonzero"
                                         transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                 </g>
                             </svg>
                         </a>
                         <div>
                             <h6 class="mb-1">Chat with Khelesh</h6>
                             <p class="mb-0 text-success">Online</p>
                         </div>
                         <div class="dropdown">
                             <a href="javascript:;" data-bs-toggle="dropdown" aria-expanded="false"><svg
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                         <rect x="0" y="0" width="24" height="24" />
                                         <circle fill="#000000" cx="5" cy="12" r="2" />
                                         <circle fill="#000000" cx="12" cy="12" r="2" />
                                         <circle fill="#000000" cx="19" cy="12" r="2" />
                                     </g>
                                 </svg></a>
                             <ul class="dropdown-menu dropdown-menu-end">
                                 <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View
                                     profile</li>
                                 <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to close
                                     friends</li>
                                 <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group
                                 </li>
                                 <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                             </ul>
                         </div>
                     </div>
                     <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
                         <div class="d-flex justify-content-start mb-4">
                             <div class="img_cont_msg">
                                 <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                             </div>
                             <div class="msg_cotainer">
                                 Hi, how are you samim?
                                 <span class="msg_time">8:40 AM, Today</span>
                             </div>
                         </div>
                         <div class="d-flex justify-content-end mb-4">
                             <div class="msg_cotainer_send">
                                 Hi Khalid i am good tnx how about you?
                                 <span class="msg_time_send">8:55 AM, Today</span>
                             </div>
                             <div class="img_cont_msg">
                                 <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                             </div>
                         </div>
                         <div class="d-flex justify-content-start mb-4">
                             <div class="img_cont_msg">
                                 <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                             </div>
                             <div class="msg_cotainer">
                                 I am good too, thank you for your chat template
                                 <span class="msg_time">9:00 AM, Today</span>
                             </div>
                         </div>
                         <div class="d-flex justify-content-end mb-4">
                             <div class="msg_cotainer_send">
                                 You are welcome
                                 <span class="msg_time_send">9:05 AM, Today</span>
                             </div>
                             <div class="img_cont_msg">
                                 <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                             </div>
                         </div>
                         <div class="d-flex justify-content-start mb-4">
                             <div class="img_cont_msg">
                                 <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                             </div>
                             <div class="msg_cotainer">
                                 I am looking for your next templates
                                 <span class="msg_time">9:07 AM, Today</span>
                             </div>
                         </div>
                         <div class="d-flex justify-content-end mb-4">
                             <div class="msg_cotainer_send">
                                 Ok, thank you have a good day
                                 <span class="msg_time_send">9:10 AM, Today</span>
                             </div>
                             <div class="img_cont_msg">
                                 <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                             </div>
                         </div>
                         <div class="d-flex justify-content-start mb-4">
                             <div class="img_cont_msg">
                                 <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                             </div>
                             <div class="msg_cotainer">
                                 Bye, see you
                                 <span class="msg_time">9:12 AM, Today</span>
                             </div>
                         </div>
                         <div class="d-flex justify-content-start mb-4">
                             <div class="img_cont_msg">
                                 <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                             </div>
                             <div class="msg_cotainer">
                                 Hi, how are you samim?
                                 <span class="msg_time">8:40 AM, Today</span>
                             </div>
                         </div>
                         <div class="d-flex justify-content-end mb-4">
                             <div class="msg_cotainer_send">
                                 Hi Khalid i am good tnx how about you?
                                 <span class="msg_time_send">8:55 AM, Today</span>
                             </div>
                             <div class="img_cont_msg">
                                 <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                             </div>
                         </div>
                         <div class="d-flex justify-content-start mb-4">
                             <div class="img_cont_msg">
                                 <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                             </div>
                             <div class="msg_cotainer">
                                 I am good too, thank you for your chat template
                                 <span class="msg_time">9:00 AM, Today</span>
                             </div>
                         </div>
                         <div class="d-flex justify-content-end mb-4">
                             <div class="msg_cotainer_send">
                                 You are welcome
                                 <span class="msg_time_send">9:05 AM, Today</span>
                             </div>
                             <div class="img_cont_msg">
                                 <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                             </div>
                         </div>
                         <div class="d-flex justify-content-start mb-4">
                             <div class="img_cont_msg">
                                 <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                             </div>
                             <div class="msg_cotainer">
                                 I am looking for your next templates
                                 <span class="msg_time">9:07 AM, Today</span>
                             </div>
                         </div>
                         <div class="d-flex justify-content-end mb-4">
                             <div class="msg_cotainer_send">
                                 Ok, thank you have a good day
                                 <span class="msg_time_send">9:10 AM, Today</span>
                             </div>
                             <div class="img_cont_msg">
                                 <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                             </div>
                         </div>
                         <div class="d-flex justify-content-start mb-4">
                             <div class="img_cont_msg">
                                 <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                             </div>
                             <div class="msg_cotainer">
                                 Bye, see you
                                 <span class="msg_time">9:12 AM, Today</span>
                             </div>
                         </div>
                     </div>
                     <div class="card-footer type_msg">
                         <div class="input-group">
                             <textarea class="form-control" placeholder="Type your message..."></textarea>
                             <div class="input-group-append">
                                 <button type="button" class="btn btn-primary"><i
                                         class="fa fa-location-arrow"></i></button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="tab-pane fade" id="alerts" role="tabpanel">
                 <div class="card mb-sm-3 mb-md-0 contacts_card">
                     <div class="card-header chat-list-header text-center">
                         <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                 viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                     <rect x="0" y="0" width="24" height="24" />
                                     <circle fill="#000000" cx="5" cy="12" r="2" />
                                     <circle fill="#000000" cx="12" cy="12" r="2" />
                                     <circle fill="#000000" cx="19" cy="12" r="2" />
                                 </g>
                             </svg></a>
                         <div>
                             <h6 class="mb-1">Notications</h6>
                             <p class="mb-0">Show All</p>
                         </div>
                         <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                 viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                     <rect x="0" y="0" width="24" height="24" />
                                     <path
                                         d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                         fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                     <path
                                         d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                         fill="#000000" fill-rule="nonzero" />
                                 </g>
                             </svg></a>
                     </div>
                     <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
                         <ul class="contacts">
                             <li class="name-first-letter">SEVER STATUS</li>
                             <li class="active">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont primary">KK</div>
                                     <div class="user_info">
                                         <span>David Nester Birthday</span>
                                         <p class="text-primary">Today</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="name-first-letter">SOCIAL</li>
                             <li>
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
                                     <div class="user_info">
                                         <span>Perfection Simplified</span>
                                         <p>Jame Smith commented on your status</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="name-first-letter">SEVER STATUS</li>
                             <li>
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
                                     <div class="user_info">
                                         <span>AharlieKane</span>
                                         <p>Sami is online</p>
                                     </div>
                                 </div>
                             </li>
                             <li>
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
                                     <div class="user_info">
                                         <span>Athan Jacoby</span>
                                         <p>Nargis left 30 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                         </ul>
                     </div>
                     <div class="card-footer"></div>
                 </div>
             </div>
             <div class="tab-pane fade" id="notes">
                 <div class="card mb-sm-3 mb-md-0 note_card">
                     <div class="card-header chat-list-header text-center">
                         <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                 viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                     <rect fill="#000000" x="4" y="11" width="16"
                                         height="2" rx="1" />
                                     <rect fill="#000000" opacity="0.3"
                                         transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                         x="4" y="11" width="16" height="2"
                                         rx="1" />
                                 </g>
                             </svg></a>
                         <div>
                             <h6 class="mb-1">Notes</h6>
                             <p class="mb-0">Add New Nots</p>
                         </div>
                         <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                 viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                     <rect x="0" y="0" width="24" height="24" />
                                     <path
                                         d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                         fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                     <path
                                         d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                         fill="#000000" fill-rule="nonzero" />
                                 </g>
                             </svg></a>
                     </div>
                     <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
                         <ul class="contacts">
                             <li class="active">
                                 <div class="d-flex bd-highlight">
                                     <div class="user_info">
                                         <span>New order placed..</span>
                                         <p>10 Aug 2020</p>
                                     </div>
                                     <div class="ms-auto">
                                         <a href="javascript:;" class="btn btn-primary btn-xs sharp me-1"><i
                                                 class="fa fa-pencil"></i></a>
                                         <a href="javascript:;" class="btn btn-danger btn-xs sharp"><i
                                                 class="fa fa-trash"></i></a>
                                     </div>
                                 </div>
                             </li>
                             <li>
                                 <div class="d-flex bd-highlight">
                                     <div class="user_info">
                                         <span>Youtube, a video-sharing website..</span>
                                         <p>10 Aug 2020</p>
                                     </div>
                                     <div class="ms-auto">
                                         <a href="javascript:;" class="btn btn-primary btn-xs sharp me-1"><i
                                                 class="fa fa-pencil"></i></a>
                                         <a href="javascript:;" class="btn btn-danger btn-xs sharp"><i
                                                 class="fa fa-trash"></i></a>
                                     </div>
                                 </div>
                             </li>
                             <li>
                                 <div class="d-flex bd-highlight">
                                     <div class="user_info">
                                         <span>john just buy your product..</span>
                                         <p>10 Aug 2020</p>
                                     </div>
                                     <div class="ms-auto">
                                         <a href="javascript:;" class="btn btn-primary btn-xs sharp me-1"><i
                                                 class="fa fa-pencil"></i></a>
                                         <a href="javascript:;" class="btn btn-danger btn-xs sharp"><i
                                                 class="fa fa-trash"></i></a>
                                     </div>
                                 </div>
                             </li>
                             <li>
                                 <div class="d-flex bd-highlight">
                                     <div class="user_info">
                                         <span>Athan Jacoby</span>
                                         <p>10 Aug 2020</p>
                                     </div>
                                     <div class="ms-auto">
                                         <a href="javascript:;" class="btn btn-primary btn-xs sharp me-1"><i
                                                 class="fa fa-pencil"></i></a>
                                         <a href="javascript:;" class="btn btn-danger btn-xs sharp"><i
                                                 class="fa fa-trash"></i></a>
                                     </div>
                                 </div>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--**********************************
            Chat box End
        ***********************************-->

 <!--**********************************
            Header start
        ***********************************-->
 <div class="header">
     <div class="header-content">
         <nav class="navbar navbar-expand">
             <div class="collapse navbar-collapse justify-content-between">
                 <div class="header-left">
                     <div class="dashboard_bar">
                         Sistema de Gestão Bibliotecária
                     </div>
                 </div>

                 <ul class="navbar-nav header-right">
                     {{--  <li class="nav-item dropdown notification_dropdown">
                         <a class="nav-link  ai-icon" href="javascript:;" role="button" data-bs-toggle="dropdown">
                             <svg width="25" height="25" viewBox="0 0 26 26" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M21.75 14.8385V12.0463C21.7471 9.88552 20.9385 7.80353 19.4821 6.20735C18.0258 4.61116 16.0264 3.61555 13.875 3.41516V1.625C13.875 1.39294 13.7828 1.17038 13.6187 1.00628C13.4546 0.842187 13.2321 0.75 13 0.75C12.7679 0.75 12.5454 0.842187 12.3813 1.00628C12.2172 1.17038 12.125 1.39294 12.125 1.625V3.41534C9.97361 3.61572 7.97429 4.61131 6.51794 6.20746C5.06159 7.80361 4.25291 9.88555 4.25 12.0463V14.8383C3.26257 15.0412 2.37529 15.5784 1.73774 16.3593C1.10019 17.1401 0.751339 18.1169 0.75 19.125C0.750764 19.821 1.02757 20.4882 1.51969 20.9803C2.01181 21.4724 2.67904 21.7492 3.375 21.75H8.71346C8.91521 22.738 9.45205 23.6259 10.2331 24.2636C11.0142 24.9013 11.9916 25.2497 13 25.2497C14.0084 25.2497 14.9858 24.9013 15.7669 24.2636C16.548 23.6259 17.0848 22.738 17.2865 21.75H22.625C23.321 21.7492 23.9882 21.4724 24.4803 20.9803C24.9724 20.4882 25.2492 19.821 25.25 19.125C25.2486 18.117 24.8998 17.1402 24.2622 16.3594C23.6247 15.5786 22.7374 15.0414 21.75 14.8385ZM6 12.0463C6.00232 10.2113 6.73226 8.45223 8.02974 7.15474C9.32723 5.85726 11.0863 5.12732 12.9212 5.125H13.0788C14.9137 5.12732 16.6728 5.85726 17.9703 7.15474C19.2677 8.45223 19.9977 10.2113 20 12.0463V14.75H6V12.0463ZM13 23.5C12.4589 23.4983 11.9316 23.3292 11.4905 23.0159C11.0493 22.7026 10.716 22.2604 10.5363 21.75H15.4637C15.284 22.2604 14.9507 22.7026 14.5095 23.0159C14.0684 23.3292 13.5411 23.4983 13 23.5ZM22.625 20H3.375C3.14298 19.9999 2.9205 19.9076 2.75644 19.7436C2.59237 19.5795 2.50014 19.357 2.5 19.125C2.50076 18.429 2.77757 17.7618 3.26969 17.2697C3.76181 16.7776 4.42904 16.5008 5.125 16.5H20.875C21.571 16.5008 22.2382 16.7776 22.7303 17.2697C23.2224 17.7618 23.4992 18.429 23.5 19.125C23.4999 19.357 23.4076 19.5795 23.2436 19.7436C23.0795 19.9076 22.857 19.9999 22.625 20Z"
                                     fill="#731702" />
                             </svg>
                             <span class="badge light text-white bg-primary">12</span>
                         </a>
                         <div class="dropdown-menu dropdown-menu-end">
                             <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
                                 <ul class="timeline">
                                     <li>
                                         <div class="timeline-panel">
                                             <div class="media me-2">
                                                 <img alt="image" width="50" src="images/avatar/1.jpg">
                                             </div>
                                             <div class="media-body">
                                                 <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                 <small class="d-block">29 July 2020 - 02:26 PM</small>
                                             </div>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="timeline-panel">
                                             <div class="media me-2 media-info">
                                                 KG
                                             </div>
                                             <div class="media-body">
                                                 <h6 class="mb-1">Resport created successfully</h6>
                                                 <small class="d-block">29 July 2020 - 02:26 PM</small>
                                             </div>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="timeline-panel">
                                             <div class="media me-2 media-success">
                                                 <i class="fa fa-home"></i>
                                             </div>
                                             <div class="media-body">
                                                 <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                 <small class="d-block">29 July 2020 - 02:26 PM</small>
                                             </div>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="timeline-panel">
                                             <div class="media me-2">
                                                 <img alt="image" width="50" src="images/avatar/1.jpg">
                                             </div>
                                             <div class="media-body">
                                                 <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                 <small class="d-block">29 July 2020 - 02:26 PM</small>
                                             </div>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="timeline-panel">
                                             <div class="media me-2 media-danger">
                                                 KG
                                             </div>
                                             <div class="media-body">
                                                 <h6 class="mb-1">Resport created successfully</h6>
                                                 <small class="d-block">29 July 2020 - 02:26 PM</small>
                                             </div>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="timeline-panel">
                                             <div class="media me-2 media-primary">
                                                 <i class="fa fa-home"></i>
                                             </div>
                                             <div class="media-body">
                                                 <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                 <small class="d-block">29 July 2020 - 02:26 PM</small>
                                             </div>
                                         </div>
                                     </li>
                                 </ul>
                             </div>
                             <a class="all-notification" href="javascript:;">See all notifications <i
                                     class="ti-arrow-right"></i></a>
                         </div>
                     </li> --}}
                     {{--  <li class="nav-item dropdown notification_dropdown">
                         <a class="nav-link bell bell-link ai-icon" href="javascript:;">
                             <svg width="23" height="28" viewBox="0 0 23 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M20.4604 0.848846H3.31682C2.64742 0.849582 2.00565 1.11583 1.53231 1.58916C1.05897 2.0625 0.792727 2.70427 0.791992 3.37367V15.1562C0.792727 15.8256 1.05897 16.4674 1.53231 16.9407C2.00565 17.414 2.64742 17.6803 3.31682 17.681C3.53999 17.6812 3.75398 17.7699 3.91178 17.9277C4.06958 18.0855 4.15829 18.2995 4.15843 18.5226V20.3168C4.15843 20.6214 4.24112 20.9204 4.39768 21.1817C4.55423 21.4431 4.77879 21.6571 5.04741 21.8008C5.31602 21.9446 5.61861 22.0127 5.92292 21.998C6.22723 21.9833 6.52183 21.8863 6.77533 21.7173L12.6173 17.8224C12.7554 17.7299 12.9179 17.6807 13.0841 17.681H17.187C17.7383 17.68 18.2742 17.4993 18.7136 17.1664C19.1531 16.8334 19.472 16.3664 19.6222 15.8359L22.8965 4.05007C22.9998 3.67478 23.0152 3.28071 22.9413 2.89853C22.8674 2.51634 22.7064 2.15636 22.4707 1.8466C22.2349 1.53684 21.9309 1.28565 21.5822 1.1126C21.2336 0.93954 20.8497 0.849282 20.4604 0.848846ZM21.2732 3.60301L18.0005 15.3847C17.9499 15.5614 17.8432 15.7168 17.6964 15.8274C17.5496 15.938 17.3708 15.9979 17.187 15.9978H13.0841C12.5855 15.9972 12.098 16.1448 11.6836 16.4219L5.84165 20.3168V18.5226C5.84091 17.8532 5.57467 17.2115 5.10133 16.7381C4.62799 16.2648 3.98622 15.9985 3.31682 15.9978C3.09365 15.9977 2.87966 15.909 2.72186 15.7512C2.56406 15.5934 2.47534 15.3794 2.47521 15.1562V3.37367C2.47534 3.15051 2.56406 2.93652 2.72186 2.77871C2.87966 2.62091 3.09365 2.5322 3.31682 2.53206H20.4604C20.5905 2.53239 20.7187 2.56274 20.8352 2.62073C20.9516 2.67872 21.0531 2.7628 21.1318 2.86643C21.2104 2.97005 21.2641 3.09042 21.2886 3.21818C21.3132 3.34594 21.3079 3.47763 21.2732 3.60301Z"
                                     fill="#731702" />
                                 <path
                                     d="M5.84161 8.42333H10.0497C10.2729 8.42333 10.4869 8.33466 10.6448 8.17683C10.8026 8.019 10.8913 7.80493 10.8913 7.58172C10.8913 7.35851 10.8026 7.14445 10.6448 6.98661C10.4869 6.82878 10.2729 6.74011 10.0497 6.74011H5.84161C5.6184 6.74011 5.40433 6.82878 5.2465 6.98661C5.08867 7.14445 5 7.35851 5 7.58172C5 7.80493 5.08867 8.019 5.2465 8.17683C5.40433 8.33466 5.6184 8.42333 5.84161 8.42333Z"
                                     fill="#731702" />
                                 <path
                                     d="M13.4161 10.1065H5.84161C5.6184 10.1065 5.40433 10.1952 5.2465 10.353C5.08867 10.5109 5 10.7249 5 10.9481C5 11.1714 5.08867 11.3854 5.2465 11.5433C5.40433 11.7011 5.6184 11.7898 5.84161 11.7898H13.4161C13.6393 11.7898 13.8534 11.7011 14.0112 11.5433C14.169 11.3854 14.2577 11.1714 14.2577 10.9481C14.2577 10.7249 14.169 10.5109 14.0112 10.353C13.8534 10.1952 13.6393 10.1065 13.4161 10.1065Z"
                                     fill="#731702" />
                             </svg>
                             <span class="badge light text-white bg-primary">5</span>
                         </a>
                     </li> --}}
                     {{--   <li class="nav-item dropdown notification_dropdown">
                         <a class="nav-link ai-icon" href="javascript:;" role="button" data-bs-toggle="dropdown">
                             <svg width="25" height="25" viewBox="0 0 26 26" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M22.625 5.125H21.75V1.625C21.75 1.47262 21.7102 1.32289 21.6345 1.19062C21.5589 1.05835 21.45 0.948128 21.3186 0.870868C21.1873 0.793609 21.0381 0.751989 20.8857 0.750126C20.7333 0.748264 20.5831 0.786224 20.4499 0.86025L13 4.99909L5.55007 0.86025C5.41688 0.786224 5.26667 0.748264 5.11431 0.750126C4.96194 0.751989 4.8127 0.793609 4.68136 0.870868C4.55002 0.948128 4.44113 1.05835 4.36547 1.19062C4.28981 1.32289 4.25001 1.47262 4.25 1.625V5.125H3.375C2.67904 5.12576 2.01181 5.40257 1.51969 5.89469C1.02757 6.3868 0.750764 7.05404 0.75 7.75V10.375C0.750764 11.071 1.02757 11.7382 1.51969 12.2303C2.01181 12.7224 2.67904 12.9992 3.375 13H4.25V22.625C4.25076 23.321 4.52757 23.9882 5.01969 24.4803C5.51181 24.9724 6.17904 25.2492 6.875 25.25H19.125C19.821 25.2492 20.4882 24.9724 20.9803 24.4803C21.4724 23.9882 21.7492 23.321 21.75 22.625V13H22.625C23.321 12.9992 23.9882 12.7224 24.4803 12.2303C24.9724 11.7382 25.2492 11.071 25.25 10.375V7.75C25.2492 7.05404 24.9724 6.3868 24.4803 5.89469C23.9882 5.40257 23.321 5.12576 22.625 5.125ZM20 5.125H16.3769L20 3.1125V5.125ZM6 3.1125L9.62311 5.125H6V3.1125ZM6 22.625V13H12.125V23.5H6.875C6.64303 23.4997 6.42064 23.4074 6.25661 23.2434C6.09258 23.0793 6.0003 22.857 6 22.625ZM20 22.625C19.9997 22.857 19.9074 23.0793 19.7434 23.2434C19.5794 23.4074 19.357 23.4997 19.125 23.5H13.875V13H20V22.625ZM23.5 10.375C23.4997 10.607 23.4074 10.8294 23.2434 10.9934C23.0794 11.1574 22.857 11.2497 22.625 11.25H3.375C3.14303 11.2497 2.92064 11.1574 2.75661 10.9934C2.59258 10.8294 2.5003 10.607 2.5 10.375V7.75C2.5003 7.51803 2.59258 7.29564 2.75661 7.13161C2.92064 6.96758 3.14303 6.8753 3.375 6.875H22.625C22.857 6.8753 23.0794 6.96758 23.2434 7.13161C23.4074 7.29564 23.4997 7.51803 23.5 7.75V10.375Z"
                                     fill="#3E4954" />
                             </svg>
                             <span class="badge light text-white bg-dark">2</span>
                         </a>
                         <div class="dropdown-menu dropdown-menu-end p-3">
                             <div id="DZ_W_Gifts" class="widget-timeline dz-scroll style-1 height300">
                                 <ul class="timeline">
                                     <li>
                                         <div class="timeline-badge primary"></div>
                                         <a class="timeline-panel text-muted" href="javascript:;">
                                             <span>10 minutes ago</span>
                                             <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong
                                                     class="text-primary">$500</strong>.</h6>
                                         </a>
                                     </li>
                                     <li>
                                         <div class="timeline-badge info">
                                         </div>
                                         <a class="timeline-panel text-muted" href="javascript:;">
                                             <span>20 minutes ago</span>
                                             <h6 class="mb-0">New order placed <strong
                                                     class="text-info">#XF-2356.</strong></h6>
                                             <p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...
                                             </p>
                                         </a>
                                     </li>
                                     <li>
                                         <div class="timeline-badge danger">
                                         </div>
                                         <a class="timeline-panel text-muted" href="javascript:;">
                                             <span>30 minutes ago</span>
                                             <h6 class="mb-0">john just buy your product <strong
                                                     class="text-warning">Sell $250</strong></h6>
                                         </a>
                                     </li>
                                     <li>
                                         <div class="timeline-badge success">
                                         </div>
                                         <a class="timeline-panel text-muted" href="javascript:;">
                                             <span>15 minutes ago</span>
                                             <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                         </a>
                                     </li>
                                     <li>
                                         <div class="timeline-badge warning">
                                         </div>
                                         <a class="timeline-panel text-muted" href="javascript:;">
                                             <span>20 minutes ago</span>
                                             <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                         </a>
                                     </li>
                                     <li>
                                         <div class="timeline-badge dark">
                                         </div>
                                         <a class="timeline-panel text-muted" href="javascript:;">
                                             <span>20 minutes ago</span>
                                             <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </li> --}}
                     <li class="nav-item dropdown header-profile">
                         <a class="nav-link" href="javascript:;" role="button" data-bs-toggle="dropdown">
                             <img src="{{ isset(Auth::user()->profile_photo_path) ? asset(Auth::user()->profile_photo_path) : asset('xhtml/images/profile/12.png') }}"
                                 width="20" alt="" />
                             <div class="header-info">
                                 <span><strong> {{ Auth::user()->name }}</strong></span>
                             </div>
                         </a>
                         <div class="dropdown-menu dropdown-menu-end">
                             <a href="{{ route('admin.user.perfil') }}" class="dropdown-item ai-icon">
                                 <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                     width="18" height="18" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                     <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                     <circle cx="12" cy="7" r="4"></circle>
                                 </svg>
                                 <span class="ms-2">Perfil </span>
                             </a>

                             <a ref="{{ route('logout') }}"
                                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                 class="dropdown-item ai-icon">
                                 <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                     width="18" height="18" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                     <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                     <polyline points="16 17 21 12 16 7"></polyline>
                                     <line x1="21" y1="12" x2="9" y2="12"></line>
                                 </svg>
                                 <span class="ms-2">Terminar Sessão </span>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                     @csrf
                                 </form>
                             </a>
                         </div>
                     </li>
                 </ul>
             </div>
         </nav>
     </div>
 </div>
 <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

 <!--**********************************
            Sidebar start
        ***********************************-->
 <div class="deznav">
     <div class="deznav-scroll">
         <ul class="metismenu" id="menu">
             @if (isset(Auth::user()->perfil) && Auth::user()->perfil == 'Administrador')
                 <li><a href="{{ route('admin.dash') }}" class="ai-icon" aria-expanded="false">
                         <i class="fas fa-dice-d6" aria-hidden="true"></i>

                         <span class="nav-text">Painel</span>
                     </a>
                 </li>
             @endif

             @if (isset(Auth::user()->perfil) && Auth::user()->perfil == 'Administrador')
                 <li><a href="{{ route('admin.user.index') }}" class="ai-icon" aria-expanded="false">
                         <i class="fa fa-user" aria-hidden="true"></i>

                         <span class="nav-text">Utilizadores</span>
                     </a>
                 </li>
             @endif
             <li><a href="{{ route('admin.categoria.index') }}" class="ai-icon" aria-expanded="false">
                     <i class="fas fa-dice-d6" aria-hidden="true"></i>

                     <span class="nav-text">Categorias</span>
                 </a>
             </li>

             <li><a href="{{ route('admin.autor.index') }}" class="ai-icon" aria-expanded="false">
                <i class="fas fa-dice-d6" aria-hidden="true"></i>

                <span class="nav-text">Autores</span>
            </a>
        </li>
        


        <li><a href="{{ route('admin.editora.index') }}" class="ai-icon" aria-expanded="false">
            <i class="fas fa-dice-d6" aria-hidden="true"></i>

            <span class="nav-text">Editoras</span>
        </a>
    </li>

    <li><a href="{{ route('admin.professor.index') }}" class="ai-icon" aria-expanded="false">
        <i class="fas fa-dice-d6" aria-hidden="true"></i>

        <span class="nav-text">Professores</span>
    </a>
</li>

            

             @if (isset(Auth::user()->perfil) && Auth::user()->perfil == 'Administrador')
                 <li>
                     <a href="{{ route('admin.log.search') }}" class="ai-icon" aria-expanded="false">
                         <i class="fas fa-file"></i>
                         <span class="nav-text" data-key="t-calendar">Registro de Actividades</span>
                     </a>
                 </li>

                 <li>
                     <a href="{{ route('admin.log.search.print') }}" class="ai-icon" aria-expanded="false">
                         <i class="fas fa-print"></i>
                         <span class="nav-text" data-key="t-calendar">Imprimir Registros</span>
                     </a>
                 </li>
             @endif




             





         </ul>


         <div class="copyright">
             <p class="fs-14 font-w200"><strong class="font-w400">ML</strong> © {{ date('Y') }} Todos os
                 Direitos Reservados</p>
             <p class="fs-12"></p>
         </div>
     </div>
 </div>
 <!--**********************************
            Sidebar end
        ***********************************-->
