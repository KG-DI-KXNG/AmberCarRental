<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        
        .fancy-btn {
        -webkit-appearance: none;
        cursor: pointer;
        outline: none;
        border: none;
        position: relative;
        top: 50%;
        display: block;
        min-width: 10%;
        line-height: 55px;
        font-size: 14px;
        text-transform: uppercase;
        margin: 0 auto;
        padding: 0 10px;
        background-color: #F2594B;
        color: #FFF;
        border-radius: 3px;
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        }
        .fancy-btn:hover {
        background-color: #f46f63;
        }

        .modal-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 40;
        -moz-transition: opacity 0.25s ease 0s, visibility 0.35s linear;
        -o-transition: opacity 0.25s ease 0s, visibility 0.35s linear;
        -webkit-transition: opacity 0.25s ease, visibility 0.35s linear;
        -webkit-transition-delay: 0s, 0s;
        transition: opacity 0.25s ease 0s, visibility 0.35s linear;
        }
        .modal-overlay.state-show {
        opacity: .7;
        visibility: visible;
        -moz-transition-delay: 0s;
        -o-transition-delay: 0s;
        -webkit-transition-delay: 0s;
        transition-delay: 0s;
        -moz-transition-duration: 0.2s, 0s;
        -o-transition-duration: 0.2s, 0s;
        -webkit-transition-duration: 0.2s, 0s;
        transition-duration: 0.2s, 0s;
        }

        .modal-frame {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        z-index: 50;
        /*     display: table; */
        display: -webkit-flex;
        display: flex;
        -webkit-align-items: center;
        align-items: center;
        -moz-box-align: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -moz-box-pack: center;
        -ms-flex-pack: center;
        width: 100%;
        text-align: center;
        visibility: hidden;
        }
        .modal-frame.state-appear {
        visibility: visible;
        }
        .modal-frame.state-appear .modal-inset {
        -moz-animation: modalComeIn 0.25s ease;
        -webkit-animation: modalComeIn 0.25s ease;
        animation: modalComeIn 0.25s ease;
        visibility: visible;
        /* to keep @ final state */
        }
        .modal-frame.state-appear .modal-body {
        opacity: 1;
        -moz-transform: translateY(0) scale(1, 1);
        -ms-transform: translateY(0) scale(1, 1);
        -webkit-transform: translateY(0) scale(1, 1);
        transform: translateY(0) scale(1, 1);
        }
        .modal-frame.state-leave {
        visibility: visible;
        }
        .modal-frame.state-leave .modal-inset {
        -moz-animation: modalHeadOut 0.35s ease 0.1s;
        -webkit-animation: modalHeadOut 0.35s ease 0.1s;
        animation: modalHeadOut 0.35s ease 0.1s;
        visibility: visible;
        }
        .modal-frame.state-leave .modal-body {
        opacity: 0;
        -moz-transition-delay: 0s;
        -o-transition-delay: 0s;
        -webkit-transition-delay: 0s;
        transition-delay: 0s;
        -moz-transition-duration: 0.35s;
        -o-transition-duration: 0.35s;
        -webkit-transition-duration: 0.35s;
        transition-duration: 0.35s;
        -moz-transition-timing-function: ease;
        -o-transition-timing-function: ease;
        -webkit-transition-timing-function: ease;
        transition-timing-function: ease;
        -moz-transform: translateY(25px);
        -ms-transform: translateY(25px);
        -webkit-transform: translateY(25px);
        transform: translateY(25px);
        }

        @-moz-document url-prefix() {
        .modal-frame {
            height: calc(100% - 55px);
        }
        }
        .modal {
        display: block;
        vertical-align: middle;
        text-align: center;
        }

        .modal-inset {
        position: relative;
        padding: 60px;
        background-color: white;
        min-width: 320px;
        min-height: 126px;
        margin: auto;
        visibility: hidden;
        -moz-box-shadow: 2px 2px 8px 1px rgba(0, 0, 0, 0.2);
        -webkit-box-shadow: 2px 2px 8px 1px rgba(0, 0, 0, 0.2);
        box-shadow: 2px 2px 8px 1px rgba(0, 0, 0, 0.2);
        -moz-backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        -moz-transform-style: preserve-3d;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
        }
        .modal-inset .close {
        display: block;
        cursor: pointer;
        position: absolute;
        top: 10px;
        right: 10px;
        padding: 10px;
        opacity: .4;
        }
        .modal-inset .close:hover {
        opacity: 1;
        }

        .modal-body {
        margin: auto;
        opacity: 0;
        -moz-transform: translateY(0) scale(0.8, 0.8);
        -ms-transform: translateY(0) scale(0.8, 0.8);
        -webkit-transform: translateY(0) scale(0.8, 0.8);
        transform: translateY(0) scale(0.8, 0.8);
        -moz-transition-property: opacity, -moz-transform;
        -o-transition-property: opacity, -o-transform;
        -webkit-transition-property: opacity, -webkit-transform;
        transition-property: opacity, transform;
        -moz-transition-duration: 0.25s;
        -o-transition-duration: 0.25s;
        -webkit-transition-duration: 0.25s;
        transition-duration: 0.25s;
        -moz-transition-delay: 0.1s;
        -o-transition-delay: 0.1s;
        -webkit-transition-delay: 0.1s;
        transition-delay: 0.1s;
        }
        .modal-body h3 {
        font-weight: 700;
        padding-bottom: 22px;
        display: block;
        color: #F2594B;
        text-align: center;
        }
        .modal-body p {
        padding-bottom: 20px;
        }
        .modal-body .ps {
        font-size: 12px;
        opacity: .3;
        }

        @-webkit-keyframes modalComeIn {
        0% {
            visibility: hidden;
            opacity: 0;
            -moz-transform: scale(0.8, 0.8);
            -ms-transform: scale(0.8, 0.8);
            -webkit-transform: scale(0.8, 0.8);
            transform: scale(0.8, 0.8);
        }
        65.5% {
            -moz-transform: scale(1.03, 1.03);
            -ms-transform: scale(1.03, 1.03);
            -webkit-transform: scale(1.03, 1.03);
            transform: scale(1.03, 1.03);
        }
        100% {
            visibility: visible;
            opacity: 1;
            -moz-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
        }
        }
        @-moz-keyframes modalComeIn {
        0% {
            visibility: hidden;
            opacity: 0;
            -moz-transform: scale(0.8, 0.8);
            -ms-transform: scale(0.8, 0.8);
            -webkit-transform: scale(0.8, 0.8);
            transform: scale(0.8, 0.8);
        }
        65.5% {
            -moz-transform: scale(1.03, 1.03);
            -ms-transform: scale(1.03, 1.03);
            -webkit-transform: scale(1.03, 1.03);
            transform: scale(1.03, 1.03);
        }
        100% {
            visibility: visible;
            opacity: 1;
            -moz-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
        }
        }
        @keyframes modalComeIn {
        0% {
            visibility: hidden;
            opacity: 0;
            -moz-transform: scale(0.8, 0.8);
            -ms-transform: scale(0.8, 0.8);
            -webkit-transform: scale(0.8, 0.8);
            transform: scale(0.8, 0.8);
        }
        65.5% {
            -moz-transform: scale(1.03, 1.03);
            -ms-transform: scale(1.03, 1.03);
            -webkit-transform: scale(1.03, 1.03);
            transform: scale(1.03, 1.03);
        }
        100% {
            visibility: visible;
            opacity: 1;
            -moz-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
        }
        }
        @-webkit-keyframes modalHeadOut {
        0% {
            visibility: visible;
            opacity: 1;
            -moz-transform: translateY(0) scale(1, 1);
            -ms-transform: translateY(0) scale(1, 1);
            -webkit-transform: translateY(0) scale(1, 1);
            transform: translateY(0) scale(1, 1);
        }
        100% {
            visibility: hidden;
            opacity: 0;
            -moz-transform: translateY(35px) scale(0.97, 0.97);
            -ms-transform: translateY(35px) scale(0.97, 0.97);
            -webkit-transform: translateY(35px) scale(0.97, 0.97);
            transform: translateY(35px) scale(0.97, 0.97);
        }
        }
        @-moz-keyframes modalHeadOut {
        0% {
            visibility: visible;
            opacity: 1;
            -moz-transform: translateY(0) scale(1, 1);
            -ms-transform: translateY(0) scale(1, 1);
            -webkit-transform: translateY(0) scale(1, 1);
            transform: translateY(0) scale(1, 1);
        }
        100% {
            visibility: hidden;
            opacity: 0;
            -moz-transform: translateY(35px) scale(0.97, 0.97);
            -ms-transform: translateY(35px) scale(0.97, 0.97);
            -webkit-transform: translateY(35px) scale(0.97, 0.97);
            transform: translateY(35px) scale(0.97, 0.97);
        }
        }
        @keyframes modalHeadOut {
        0% {
            visibility: visible;
            opacity: 1;
            -moz-transform: translateY(0) scale(1, 1);
            -ms-transform: translateY(0) scale(1, 1);
            -webkit-transform: translateY(0) scale(1, 1);
            transform: translateY(0) scale(1, 1);
        }
        100% {
            visibility: hidden;
            opacity: 0;
            -moz-transform: translateY(35px) scale(0.97, 0.97);
            -ms-transform: translateY(35px) scale(0.97, 0.97);
            -webkit-transform: translateY(35px) scale(0.97, 0.97);
            transform: translateY(35px) scale(0.97, 0.97);
        }
        }

    </style>
</head>
<body >
    <div class="flex h-screen w-full bg-gray-800 " x-data="{openMenu:1}">
        <!--Start SideBar-->
        <aside class="w-20 relative z-20 flex-shrink-0  px-2 overflow-y-auto bg-indigo-600 sm:block">
            <div class="mb-6">
                <!--Start logo -->
                <div class="flex justify-center">
                  <div class="w-14 h-14 rounded-full bg-gray-300 border-2 border-white mt-2">
                    <img 
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVxhAxJ4D7MOeTTj6kR9PBeZonW5HM7giKjTbEmR-HMBwf3G1VqGnlwpO1kWrdyIZu8_U&usqp=CAU" 
                     class="rounded-full w-auto"
                    />
                  </div>
                </div>
                <!--End logo -->
                <!--Start NavItem -->
                <div>
                  <ul class="mt-6 leading-10 px-4">
                    <li class="mb-3 p-2 rounded-md flex items-center justify-center bg-blue-400 cursor-pointer"
                        @click="openMenu !== 1 ? openMenu = 1 : openMenu = null"
                      >
                      <i class="fas fa-align-left fa-sm text-white"></i>
                    </li>
                    <li class="mb-3 p-2 rounded-md flex items-center justify-center bg-pink-400 cursor-pointer">
                      <i class="fas fa-question-circle fa-sm text-white"></i>
                    </li>
                    <li class="mb-3 p-2 rounded-md flex items-center justify-center bg-yellow-400 cursor-pointer">
                      <i class="fas fa-headphones fa-sm text-white"></i>
                    </li>
                    <li class="absolute bottom-0 mb-3 p-2 rounded-full flex items-center mx-auto bg-white cursor-pointer">
                      <i class="fas fa-power-off fa-sm text-indigo-600 logout" ></i>
                    </li>
                  </ul>
                </div>
                <!--End NavItem -->
            </div>
        </aside>
        <!-- Start Open Menu -->
        <aside class="animate__animated animate__fadeInLeft w-52 relative z-0 flex-shrink-0 hidden px-4 overflow-y-auto bg-gray-100 sm:block " 
               x-show="openMenu ==  1" 
               @click.away="openMenu = null" 
               style="display: none;">
            <div class="mb-6">
              <!--Start Sidebar for open menu -->
              <div class="grid grid-cols-1 gap-4 grid-cols-2 mt-6">
                <!-- Start Navitem -->
                <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                  <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                    <i class="fas fa-chart-pie fa-sm text-indigo-600"></i>
                  </div>
                  <p class="text-xs mt-1 text-center font-semibold">Dashboard</p>
                </div>
                <!-- End Navitem -->
                <!-- Start Navitem -->
                <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                  <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                    <i class="fas fa-calculator fa-sm text-indigo-600"></i>
                  </div>
                  <p class="text-xs mt-1 text-center font-semibold">Calculator</p>
                </div>
                <!-- End Navitem -->
                <!-- Start Navitem -->
                <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                  <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                    <i class="fas fa-wallet fa-sm text-indigo-600"></i>
                  </div>
                  <p class="text-xs mt-1 text-center font-semibold">Wallet</p>
                </div>
                <!-- End Navitem -->
                <!-- Start Navitem -->
                <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                  <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                    <i class="fas fa-archive fa-sm text-indigo-600"></i>
                  </div>
                  <p class="text-xs mt-1 text-center font-semibold">Saving</p>
                </div>
                <!-- End Navitem -->
                <!-- Start Navitem -->
                <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                  <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                    <i class="fas fa-money-bill-wave-alt fa-sm text-indigo-600"></i>
                  </div>
                  <p class="text-xs mt-1 text-center font-semibold">Currencies</p>
                </div>
                <!-- End Navitem -->
                 <!-- Start Navitem -->
                <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                  <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                    <i class="fas fa-shopping-basket fa-sm text-indigo-600"></i>
                  </div>
                  <p class="text-xs mt-1 text-center font-semibold">Expenses</p>
                </div>
                <!-- End Navitem -->
              </div>
              <!--End Sidebar for open menu -->
            </div>
        </aside>
        <!-- End Open Menu -->
        
        <!-- End Sidebar -->
        <div class="flex flex-col flex-1 w-full overflow-y-auto">
            <!--Start Topbar -->
            <!--End Topbar -->
          <main class="relative z-0 flex-1 pb-8 px-6 bg-white">
              <div class="grid pb-10  mt-4 ">
                  <!-- Start Content-->
                    <div class="mb-2">
                      <p class="text-lg font-semibold text-gray-400">AmberRental</p>
                    </div>
                    <div class="grid grid-cols-12 gap-6 border-b-2 pb-5">
                      <div class="col-span-12 sm:col-span-12 md:col-span-8 lg:col-span-8 xxl:col-span-8">
                        <div class="grid grid-cols-1 gap-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 mt-3">
                           <div class="p-4">
                              <p class="text-xl font-bold">4</p>
                              <p class="text-xs font-semibold text-gray-400">User's</p>
                           </div>
                           <div class="p-4">
                              <p class="text-xl font-bold">RM 37,500</p>
                              <p class="text-xs font-semibold text-gray-400">Total Outstanding</p>
                           </div>
                           <div class="p-4">
                              <p class="text-xl font-bold">RM 9,200</p>
                              <p class="text-xs font-semibold text-gray-400">In Process</p>
                           </div>
                           <div class=" p-4">
                              <p class="text-xl font-bold">RM 5,700</p>
                              <p class="text-xs font-semibold text-gray-400">Paid Today</p>
                           </div>
                        </div>
                      </div>
                      <div class="col-span-12 sm:col-span-12 md:col-span-4 lg:col-span-4 xxl:col-span-4">
                          <div class="p-4">
                              <p class="text-sm text-gray-400">Outstanding Revenue</p>
                              <div class="shadow w-full bg-gray-100 mt-2">
                                  <div class="bg-indigo-600 text-xs leading-none py-1 text-center text-white" style="width: 55%"></div>
                               </div>
                                <p class="text-xs font-semibold text-gray-400 mt-2">RM 45,941 Overdue</p>
                           </div>
                      </div>
                    </div>
                    <div class="grid grid-cols-1 gap-2 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 mt-3">
                      <div class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
                        style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                          <div class="absolute inset-0 bg-pink-900 bg-opacity-75 transition duration-300 ease-in-out"></div>
                          <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center justify-center">
                            <div>
                              <h3 class="text-center text-white text-lg">
                                   Total Balance
                              </h3>
                              <h3 class="text-center text-white text-3xl mt-2 font-bold">
                                   RM 27,580
                              </h3>
                              <div class="flex space-x-4 mt-4">
                                 <button class="block uppercase mx-auto shadow bg-white text-indigo-600 focus:shadow-outline 
                                  focus:outline-none text-white text-xs py-3 px-4 rounded font-bold">
                                  Transfer
                                </button>
                                <button class="block uppercase mx-auto shadow bg-indigo-800 hover:bg-indigo-700 focus:shadow-outline 
                                   focus:outline-none text-white text-xs py-3 px-4 rounded font-bold">
                                  Request
                                </button>
                              </div>
                            </div>
                          </div>
                      </div>
                       <div class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
                        style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                          <div class="absolute inset-0 bg-yellow-600 bg-opacity-75 transition duration-300 ease-in-out"></div>
                            <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center">
                            <div>
                              <div class="text-white text-lg flex space-x-2 items-center">
                                <div class="bg-white rounded-md p-2 flex items-center">
                                  <i class="fas fa-toggle-off fa-sm text-yellow-300"></i>
                                </div>
                                <p>Finished Appt</p>
                              </div>
                              <h3 class="text-white text-3xl mt-2 font-bold">
                                  120
                              </h3>
                               <h3 class="text-white text-lg mt-2 text-yellow-100 ">
                                  4 not confirmed
                              </h3>
                            </div>
                          </div>
                      </div>
                       <div class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
                        style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                          <div class="absolute inset-0 bg-blue-900 bg-opacity-75 transition duration-300 ease-in-out"></div>
                          <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center">
                            <div>
                              <div class="text-white text-lg flex space-x-2 items-center">
                                <div class="bg-white rounded-md p-2 flex items-center">
                                  <i class="fas fa-clipboard-check fa-sm text-blue-800"></i>
                                </div>
                                <p>Finished Appt</p>
                              </div>
                              <h3 class="text-white text-3xl mt-2 font-bold">
                                  72
                              </h3>
                               <h3 class="text-white text-lg mt-2 ">
                                 3.4% <span class='font-semibold text-blue-200'>vs last month</span>
                              </h3>
                            </div>
                          </div>
                      </div>        
                    </div>
                    
                  <!-- End Content-->
              </div>
          </main>
        </div>
    </div>
    <div class="modal-frame">
        <div class="modal ">
                <div class="modal-inset rounded-xl">
                    <div class="button close"><i class="fa fa-close"></i>
                </div>
        
                <div class="modal-body">
                    <h3>Are You Sure You Want To Logout!</h3>
                    <div class="flex">
                        <div class="mt-3 rounded-lg sm:mt-0">
                            <button class="
                          items-center
                          block
                          px-2
                          py-2
                          text-base
                          font-medium
                          text-center text-blue-400
                          transition
                          duration-500
                          ease-in-out
                          transform
                          border-2 border-white
                          shadow-md
                          rounded-xl
                          focus:outline-none
                          focus:ring-2
                          focus:ring-offset-2
                          focus:ring-gray-500 cancel
                        "> Cancel </button>
                          </div>
                          <div class="mt-3 rounded-lg sm:mt-0 sm:ml-3">
                            <button class="items-center block px-2 py-2 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-400 rounded-xl hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"> Logout </button>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-overlay"></div>
      
    
</body>

<script>

        $modal = $('.modal-frame');
        $overlay = $('.modal-overlay');

        /* Need this to clear out the keyframe classes so they dont clash with each other between ener/leave. Cheers. */
        $modal.bind('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e){
        if($modal.hasClass('state-leave')) {
            $modal.removeClass('state-leave');
        }
        });

        $('.cancel').on('click', function(){
        $overlay.removeClass('state-show');
        $modal.removeClass('state-appear').addClass('state-leave');
        });

        $('.logout').on('click', function(){
            $overlay.addClass('state-show');
            $modal.removeClass('state-leave').addClass('state-appear');
        });
 
</script>