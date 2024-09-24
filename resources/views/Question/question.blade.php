
@extends('layout.master')
@section('content')
<body style="overflow-x:hidden">
  <div id="app">
    <div id="base-0" class="z-0 absolute w-screen h-screen">
      <div class="flex flex-col h-screen overflow-hidden font-sans dashboard-layout">
        <div style="display:none;" class="fixed top-0 bottom-0 w-auto transition-all z-100 md:hidden">
          <div class="main-navigation-container h-full">
            <div
              class="z-10 filter-box-shadow main-navigation flex flex-col h-full bg-light-3 border-r border-light-1 max-w-min"
              translate="no"><a href="/" class="" aria-label="Quizizz" title="Quizizz">
                <div class="quizizz-logo-container w-full flex h-10 m-2"><img aria-hidden="true" class="logo"
                    height="40" width="146" src="https://cf.quizizz.com/img/logos/Purple.webp" alt="logo"></div>
              </a>
              <div class="user-details">
                <div class="pb-2 p-4 user-section">
                  <div class="max-w-min">
                    <div class="relative min-w-40 max-w-40">
                      <div class="flex items-center">
                        <div class="w-full">
                          <p class="text-sm font-semibold text-dark-2">Have an account?</p>
                        </div>
                      </div>
                      <div data-testid="capture-intercept-button"><button
                          class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 base bg-lilac-faded text-lilac hover:text-lilac-light active:text-lilac-dark rounded secondary relative min-w-max mb-4 mb-4"
                          aria-label="Log in" type="button" translate="no" data-testid="sidebar-log-in-button"> <span
                            class="title" title="Log in">Log
                            in</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-4 relative block px-4 w-full"><button
                  class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-7.5 py-2.5 text-lg font-semibold q-shadow mb-1 h-10 base bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded-lg primary relative min-w-max w-full w-full"
                  aria-label="Create content" type="button" translate="no" data-testid="create-content-button"
                  data-cy="create-quiz-lesson-button"><i class="flex items-center fal fa-plus-circle mr-2"
                    style="font-size:16px;"></i> <span class="title" title="Create">Create</span> </button>
              </div>
              <div class="sidebar-navigation flex flex-col overflow-y-auto justify-between h-full">
                <div> <a href="/"
                    class="link flex items-center pl-4 whitespace-nowrap w-full hover:bg-light-1 cursor-pointer py-2 text-dark-4"
                    exactpath aria-label="Explore">
                    <div class="flex items-center w-full">
                      <div class="flex items-center justify-center w-6"><i
                          class="flex items-center fal fa-map-marked-alt" style="font-size:12px;"></i>
                      </div><span class="text-sm whitespace-nowrap pl-1">Explore</span><!--v-if-->
                    </div>
                  </a>
                  <div class="link flex w-full items-center h-11 hover:bg-dark-5% cursor-pointer text-dark-3">
                    <div class="relative flex justify-center w-4 ml-4 mr-3 icon"> <i
                        class="flex items-center fal fa-bell" style="font-size:12px;"></i></div><span
                      class="text-sm title"><span>Notifications</span></span>
                  </div><button type="button"
                    class="link flex items-center pl-4 whitespace-nowrap w-full hover:bg-light-1 cursor-pointer py-2 text-dark-4"
                    aria-label="My Library">
                    <div class="flex items-center justify-center w-6"><i class="flex items-center fal fa-books"
                        style="font-size:12px;"></i></div><span class="text-sm whitespace-nowrap pl-1">My
                      Library</span>
                  </button><button type="button"
                    class="link flex items-center pl-4 whitespace-nowrap w-full hover:bg-light-1 cursor-pointer py-2 text-dark-4"
                    aria-label="Reports">
                    <div class="flex items-center justify-center w-6"><i class="flex items-center fal fa-analytics"
                        style="font-size:12px;"></i></div><span class="text-sm whitespace-nowrap pl-1">Reports</span>
                  </button> <button type="button"
                    class="link flex items-center pl-4 whitespace-nowrap w-full hover:bg-light-1 cursor-pointer py-2 text-dark-4"
                    aria-label="Classes">
                    <div class="flex items-center justify-center w-6"><i class="flex items-center fal fa-analytics"
                        style="font-size:12px;"></i></div><span class="text-sm whitespace-nowrap pl-1">Classes</span>
                  </button><button type="button"
                    class="link flex items-center pl-4 whitespace-nowrap w-full hover:bg-light-1 cursor-pointer py-2 text-dark-4"
                    aria-label="Settings">
                    <div class="flex items-center justify-center w-6"><i class="flex items-center fal fa-cog"
                        style="font-size:12px;"></i></div><span class="text-sm whitespace-nowrap pl-1">Settings</span>
                  </button>
                </div>
                <div> </div><!--teleport start--><!--teleport end-->
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-grow h-screen"><!-- this for desktop -->
          <div class="main-navigation-container h-full hidden md:block" style="display:none;">
            <div
              class="z-10 filter-box-shadow main-navigation flex flex-col h-full bg-light-3 border-r border-light-1 max-w-min"
              translate="no"><a href="/" class="" aria-label="Quizizz" title="Quizizz">
                <div class="quizizz-logo-container w-full flex h-10 m-2"><img aria-hidden="true" class="logo"
                    height="40" width="146" src="https://cf.quizizz.com/img/logos/Purple.webp" alt="logo"></div>
              </a>
              <div class="user-details">
                <div class="pb-2 p-4 user-section">
                  <div class="max-w-min">
                    <div class="relative min-w-40 max-w-40">
                      <div class="flex items-center">
                        <div class="w-full">
                          <p class="text-sm font-semibold text-dark-2">Have an account?</p>

                        </div>
                      </div>
                      <div data-testid="capture-intercept-button"><button
                          class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 base bg-lilac-faded text-lilac hover:text-lilac-light active:text-lilac-dark rounded secondary relative min-w-max mb-4 mb-4"
                          aria-label="Log in" type="button" translate="no" data-testid="sidebar-log-in-button"> <span
                            class="title" title="Log in">Log
                            in</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-4 relative block px-4 w-full"><button
                  class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-7.5 py-2.5 text-lg font-semibold q-shadow mb-1 h-10 base bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded-lg primary relative min-w-max w-full w-full"
                  aria-label="Create content" type="button" translate="no" data-testid="create-content-button"
                  data-cy="create-quiz-lesson-button"><i class="flex items-center fal fa-plus-circle mr-2"
                    style="font-size:16px;"></i> <span class="title" title="Create">Create</span> </button>
              </div>
              <div class="sidebar-navigation flex flex-col overflow-y-auto justify-between h-full">
                <div> <a href="/"
                    class="link flex items-center pl-4 whitespace-nowrap w-full hover:bg-light-1 cursor-pointer py-2 text-dark-4"
                    exactpath aria-label="Explore">
                    <div class="flex items-center w-full">
                      <div class="flex items-center justify-center w-6"><i
                          class="flex items-center fal fa-map-marked-alt" style="font-size:12px;"></i>
                      </div><span class="text-sm whitespace-nowrap pl-1">Explore</span><!--v-if-->
                    </div>
                  </a>
                  <div class="link flex w-full items-center h-11 hover:bg-dark-5% cursor-pointer text-dark-3">
                    <div class="relative flex justify-center w-4 ml-4 mr-3 icon"> <i
                        class="flex items-center fal fa-bell" style="font-size:12px;"></i></div><span
                      class="text-sm title"><span>Notifications</span></span>
                  </div><button type="button"
                    class="link flex items-center pl-4 whitespace-nowrap w-full hover:bg-light-1 cursor-pointer py-2 text-dark-4"
                    aria-label="My Library">
                    <div class="flex items-center justify-center w-6"><i class="flex items-center fal fa-books"
                        style="font-size:12px;"></i></div><span class="text-sm whitespace-nowrap pl-1">My
                      Library</span>
                  </button><button type="button"
                    class="link flex items-center pl-4 whitespace-nowrap w-full hover:bg-light-1 cursor-pointer py-2 text-dark-4"
                    aria-label="Reports">
                    <div class="flex items-center justify-center w-6"><i class="flex items-center fal fa-analytics"
                        style="font-size:12px;"></i></div><span class="text-sm whitespace-nowrap pl-1">Reports</span>
                  </button> <button type="button"
                    class="link flex items-center pl-4 whitespace-nowrap w-full hover:bg-light-1 cursor-pointer py-2 text-dark-4"
                    aria-label="Classes">
                    <div class="flex items-center justify-center w-6"><i class="flex items-center fal fa-analytics"
                        style="font-size:12px;"></i></div><span class="text-sm whitespace-nowrap pl-1">Classes</span>
                  </button><button type="button"
                    class="link flex items-center pl-4 whitespace-nowrap w-full hover:bg-light-1 cursor-pointer py-2 text-dark-4"
                    aria-label="Settings">
                    <div class="flex items-center justify-center w-6"><i class="flex items-center fal fa-cog"
                        style="font-size:12px;"></i></div><span class="text-sm whitespace-nowrap pl-1">Settings</span>
                  </button>
                </div>
                <div> </div><!--teleport start--><!--teleport end-->
              </div>
            </div>
          </div>
          <div class="h-screen flex flex-col flex-grow w-full overflow-hidden border-l border-light-1">
            <div id="app-body-container" class="overflow-auto flex flex-grow overflow-auto bg-light-1 content">
              <!-- Need to blacklist only if quiz is in a different language than the search query language -->
              <section class="flex flex-col w-full admin" quiztype="quiz" id="5ddbce90499b5d001b5df5a0" slug="quizz">
                <div style="display:none;" class="cursor-pointer block md:hidden text-sm text-dark-3 ml-5 mt-4"><i
                    class="flex items-center fas fa-arrow-left mr-1" style="font-size:12px;"></i><span>Back</span></div>
                <div id="quiz-page-main-container" translate="no" class="main-container relative flex justify-center w-full p-2 slug">
                  <div class="flex relative w-full justify-end flex-row-reverse">
                    <div class="flex flex-col isMinWidthForRecommendedVisiblty mt-12">
                      <div style="" class="mt-2 ml-8 bg-light rounded-lg mb-6 pb-6 create-your-own-sec">
                        <div class="flex mt-5 items-center pb-4">
                          <div class="ml-4 p-2 rounded-full pencilStyle h-9 w-9"><img
                              src="{{asset('/')}}asset/image/pencil.png" alt="pencil-icon"></div>
                          <span class="pl-3 text-base pr-2">Build your own quiz</span>
                        </div>
                        <div class="mx-4"><button
                            class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 base bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded primary relative min-w-max text-base font-semibold createBtn m-0 w-full h-10 text-base font-semibold createBtn m-0 w-full h-10"
                            aria-label="Create a new quiz" type="button" translate="no"
                            data-testid="create-a-quiz-below-recommend-button"> <span class="title"
                              title="Create a new quiz">Create a new
                              quiz</span> </button>
                        </div>
                      </div>
                    </div><!-- Loading section -->
                    <div class="quiz-container md:min-w-160" style="width: 766px;">
                      <div style="" class="pt-4 hidden md:block"><span>Browse from
                          millions of quizzes</span>
                        <div
                          class="main-header-search-bar bg-light-1 border-light-1 main-header-searchbar relative mt-2 border rounded border-dark-6 z-0">
                          <div class="w-full">
                            <div class="relative w-full border-radius-inherit flex-grow">
                              <div class="border-radius-inherit relative">
                                <div
                                  class="text-dark-4 w-6 h-6 flex items-center justify-center absolute left-2 inset-0 my-auto">
                                  <i class="flex items-center fas fa-search mb-0.5 text-purple custom-placeholder-icon"
                                    style="font-size:12px;"></i>
                                </div><input id="search-input" value="" data-hj-allow data-testid="generic-input"
                                  aria-describedby="input-error-message" aria-invalid="false" aria-required="false"
                                  type="text" name=""
                                  class="border-radius-inherit remove-number-selector custom-placeholder pl-9 rounded-tl-lg rounded-bl-lg bg-transparent text-dark-2 border-light-3 placeholder-dark-2 font-semibold pr-3 pr-2 focus:outline-none h-10 w-full py-2 text-sm placeholder-sm"
                                  placeholder="Search in Quizizz library " autocomplete="off" lang="" maxlength="256"
                                  tabindex="0">
                              </div>
                              <div style="display:none;" class="flex pt-1 text-xs font-semibold text-red"
                                aria-live="assertive"><span class="w-4 h-4 flex items-center justify-center mr-0.5"><i
                                    class="flex items-center far fa-exclamation-circle"
                                    style="font-size:11px;"></i></span><span id="input-error-message"
                                  data-testid="input-error-message"></span></div>
                            </div>
                          </div> <button type="button" class="hidden md:block"> </button>
                        </div>
                        <div></div>
                      </div> <!-- Todo: add loading state for Common Assessments widgets -->
                      <div class="relative w-full my-4 hidden md:block" data-cy="quiz-details">
                        <div><!-- Quiz Details Body -->
                          <div class="relative rounded z-10 p-4 h-54 bg-light-3 border-sm border border-ds-dark-500-20">
                            <div class="flex"><!-- Quiz Image -->
                              <div class="w-30 h-30 relative flex justify-center items-center overflow-hidden">
                                <div
                                  class="bg-light-1 flex items-center justify-center shrink-0 rounded-sm w-full h-full"
                                  objectfit="cover" alt="Quiz Image">
                                  <div class="flex items-center w-full h-full image-preview">
                                    <div class="w-full h-full">
                                      <!-- Added default image in case of ssr, because in ssr it's not known what size of image to load. Once page is loaded on browser then only one required image will be fetched --><img
                                        src="{{asset('/')}}asset/img/logos/new/logo_placeholder_sm.png"
                                        alt="Image" class="object-contain w-full h-full lazy-img rounded-inherit">
                                    </div>
                                  </div>
                                </div><!-- Upload Quiz image -->
                              </div><!-- Title and Lozenges -->
                              <div class="flex flex-col w-10/12 ml-3">
                                <div translate="no" class="flex text-xxs text-dark-4 font-semibold h-4 mb-0.5 gap-1">
                                  QUIZ </div>
                                <div class="flex w-3/5 my-1 quiz-name text-xl min-h-12 text-dark-2">
                                  <button type="button" class="flex w-full items-center" disabled>
                                    <h1 class="text-lg font-semibold inline-block text-left align-middle break-custom"
                                      observe-mutation="quiz_title"><span data-testid="quiz-title">quizz</span>
                                    </h1>
                                  </button>
                                </div>
                                <div class="profile-details-row-container">
                                  <h2 class="items-center flex"><i
                                      class="flex items-center far fa-graduation-cap mr-1 text-dark-4"
                                      style="font-size:12px;"></i>
                                    <div class="flex text-dark-3 text-xs">
                                      <div class="truncate max-w-40"><span translate="no">University</span></div>

                                    </div>
                                    <div class="flex text-dark-3 text-xs"> </div>

                                  </h2>
                                  <div class="items-center mx-2 flex">
                                    <div class="w-1 h-1 rounded-full bg-dark-5"></div>
                                  </div>
                                  <div class="flex items-center"><i
                                      class="flex items-center far fa-book text-dark-4 mr-1"
                                      style="font-size:12px;"></i>
                                    <h2 translate="no" class="text-xs text-dark-3 max-w-50 truncate">
                                      <span translate="no" class="_i18n-container LANG_undefined" maxlenght="-1"></span>
                                    </h2>
                                  </div>
                                  <div translate="no" class="flex items-center w-fit w-26"><i
                                      class="flex items-center far fa-bullseye-arrow mr-1.5 text-dark-4"
                                      style="font-size:12px;"></i>
                                    <div class="flex items-center text-dark-3 text-xs min-w-max" translate="no">42% <div
                                        class="ml-1"><span>accuracy</span></div>
                                    </div>
                                  </div>
                                  <div class="flex items-center mx-2">
                                    <div class="w-1 h-1 rounded-full bg-dark-5"></div>
                                  </div>
                                  <div class="flex items-center"><i
                                      class="flex items-center far fa-play text-dark-4 mr-1.5"
                                      style="font-size:12px;"></i>
                                    <div translate="no" class="flex items-center text-dark-3 text-xs">
                                      8.8K <div class="mx-1">plays</div>
                                    </div>
                                  </div>
                                </div>
                              </div><!-- Action buttons on top right of card -->
                              <div translate="no" class="absolute top-4 right-4 flex gap-1">
                                <button
                                  class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max"
                                  aria-label="Share the quiz" type="button" translate="no"
                                  data-testid="quiz-details-share-top-button" data-cy="quiz-details-share-button"><i
                                    class="flex items-center far fa-share mr-2" style="font-size:11px;"></i> <span
                                    class="title" title="Share">Share</span> </button> <button
                                  class="transition-colors duration-200 ease-in-out flex flex items-center justify-center w-6 h-6 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max"
                                  aria-label="Report an issue" type="button" translate="no"
                                  data-testid="report-issue-button"><i
                                    class="flex items-center far fa-exclamation-triangle" style="font-size:11px;"></i>
                                  <span class="title" title></span> </button> <button
                                  class="transition-colors duration-200 ease-in-out flex flex items-center justify-center w-6 h-6 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max"
                                  aria-label="Print the quiz" type="button" translate="no"
                                  data-testid="print-quiz-quiz-detail-card-button"><i
                                    class="flex items-center far fa-print" style="font-size:11px;"></i> <span
                                    class="title" title></span> </button>
                              </div>
                            </div>
                            <div class="flex mt-2 flex-row justify-between items-center">
                              <div class="flex">
                                <div class="flex items-start">
                                  <div><img data-testid="quiz-creator-image-0"
                                      src="https://lh3.googleusercontent.com/a/ACg8ocKgWMyacLBkKYfSmrQ-j5CZ8dp5zxkWvWWpQx8afEsj=s96-c"
                                      alt="User image"
                                      class="w-8 h-8 mr-2 rounded-full cursor-pointer min-w-8 min-h-8 relative">
                                  </div>
                                </div>
                                <div translate="no" class="flex flex-col items-start"><a
                                    href="https://quizizz.com/profile/5ced3d29c19a98001ad65e33"
                                    class="text-xs truncate cursor-pointer text-dark-2 hover:underline max-w-28"
                                    data-testid="quiz-creator-name-0" rel="author"><span>Lê B</span></a>
                                  <div translate="no" class="text-dark-4 text-xxs">5 years</div>
                                </div>
                              </div>
                              <div class="flex justify-between space-x-1"> <button
                                  class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3  rounded other relative min-w-max shrink-0 shrink-0"
                                  aria-label="Download the worksheet" type="button" translate="no"
                                  data-testid="worksheet-quiz-page-button" style="display:none;"><i
                                    class="flex items-center far fa-download mr-2" style="font-size:12px;"></i> <span
                                    class="title" title="Worksheet">Worksheet</span> </button><button
                                  class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3  rounded other relative min-w-max shrink-0 hidden md:block shrink-0 hidden md:block"
                                  aria-label="Save" type="button" translate="no" data-testid="quiz-details-save-button"
                                  style="display:none;" data-cy="quiz-details-save-button"><i
                                    class="flex items-center far fa-folder mr-2" style="font-size:12px;"></i> <span
                                    class="title" title="Save">Save</span> </button><button
                                  class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3  rounded other relative min-w-max"
                                  aria-label="Share the quiz" type="button" translate="no"
                                  data-testid="quiz-details-share-top-button" style="display:none;"
                                  data-cy="quiz-details-share-button"><i class="flex items-center far fa-share mr-2"
                                    style="font-size:12px;"></i> <span class="title" title="Share">Share</span>
                                </button>
                                <div data-testid="for-super-container" class="for-super flex-1">
                                  <button
                                    class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3  rounded other relative min-w-max"
                                    aria-label="Copy and edit the quiz" type="button" translate="no"
                                    data-testid="copy-and-edit-quiz-button"><i
                                      class="flex items-center far fa-copy mr-2" style="font-size:12px;"></i> <span
                                      class="title" title="Copy and Edit">Copy and
                                      Edit</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Modals --> <!-- FFS Banner --> <!-- Open on settings icon click -->
                        </div>
                      </div>
                      <div class="w-full mb-4 quiz-details-mobile md:hidden">
                        <div class="p-2 z-5">
                          <div class="flex items-center w-full">
                            <div class="mr-2 text-tn text-dark-4">
                            </div>
                            <div class="flex items-center mr-1"><i class="flex items-center far fa-books text-dark-4"
                                style="font-size:9px;"></i>
                              <h2 translate="no" class="mx-1 text-tn text-dark-2"><span translate="no"
                                  class="_i18n-container LANG_undefined" maxlenght="-1"></span></h2>
                            </div>
                            <div translate="no" class="flex flex-wrap items-center"><i
                                class="flex items-center far fa-graduation-cap mr-1 text-dark-4"
                                style="font-size:9px;"></i>
                              <div class="flex text-dark-2 text-tn">
                                <h2><span><span translate="no">University</span></span> </h2>
                              </div>
                              <div class="flex text-dark-2 text-tn">
                                <h2> </h2>
                              </div>
                            </div>
                            <div class="dropdown-menu ml-auto">
                              <div><button
                                  class="transition-colors duration-200 ease-in-out flex flex items-center justify-center w-8 h-8 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3  rounded-full other relative min-w-max ml-auto ml-auto"
                                  aria-label="Menu" type="button" translate="no" data-testid="generic-button"><i
                                    class="flex items-center far fa-ellipsis-h" style="font-size:12px;"></i> <span
                                    class="title" title></span> </button>
                              </div>
                            </div>
                          </div>
                          <div class="flex items-center mt-2 space-x-2">
                            <div
                              class="bg-light-1 flex items-center justify-center shrink-0 w-12 h-12 rounded overflow-hidden rounded-sm"
                              alt="Quiz Image">
                              <div class="cursor-zoom-in flex items-center w-full h-full image-preview">

                                <div class="w-full h-full">
                                  <!-- Added default image in case of ssr, because in ssr it's not known what size of image to load. Once page is loaded on browser then only one required image will be fetched --><img
                                    src="../../../../cf.quizizz.com/img/logos/new/logo_placeholder_sm.png" alt="Image"
                                    class="object-contain w-full h-full lazy-img rounded-inherit">
                                </div>

                                <div class="image-preview__border"></div>
                              </div>
                            </div>
                            <div class="flex flex-col w-10/12">
                              <div class="flex items-center text-lg font-bold quiz-name">
                                <h1 observe-mutation="quiz_title">quizz</h1>
                              </div>
                            </div>
                          </div>
                          <div class="flex flex-col justify-between mt-4">
                            <div class="flex items-center space-x-2">
                              <div class="flex items-center">
                                <div class="flex items-center">
                                  <div class="flex items-center"><img
                                      src="https://lh3.googleusercontent.com/a/ACg8ocKgWMyacLBkKYfSmrQ-j5CZ8dp5zxkWvWWpQx8afEsj=s96-c"
                                      alt="user" class="w-4 h-4 mr-2 rounded-full cursor-pointer min-w-4 min-h-4"></div>

                                </div>
                                <div translate="no" class="flex flex-col items-start"><a
                                    href="https://quizizz.com/profile/5ced3d29c19a98001ad65e33"
                                    class="truncate cursor-pointer text-tn text-dark-3 hover:underline max-w-28"><span>Lê
                                      B</span></a></div>
                              </div>
                              <div class="flex items-center">
                                <div class="w-1 h-1 rounded-full bg-dark-5"></div>
                              </div>
                              <div translate="no" class="flex">
                                <h2 class="flex items-center"><i class="flex items-center far fa-play text-dark-4"
                                    style="font-size:11px;"></i>
                                  <div translate="no" class="flex items-center ml-1 text-dark-3 text-tn">8.8K <div
                                      class="mx-1">plays</div>
                                  </div>
                                </h2>
                              </div>
                              <div class="flex items-center">
                                <div class="w-1 h-1 rounded-full bg-dark-5"></div>
                              </div>
                              <div class="flex items-center text-tn"><i
                                  class="flex items-center far fa-tasks text-dark-3" style="font-size:11px;"></i>
                                <h2 translate="no" class="mx-2 text-dark-2">9 questions</h2>
                              </div>
                            </div>
                            <div class="btns-container flex justify-end mt-4 space-x-1 flex-wrap">

                              <div data-testid="for-super-container" class="for-super"><button
                                  class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3  rounded other relative min-w-max w-full w-full"
                                  aria-label="Copy and edit the quiz" type="button" translate="no"
                                  data-testid="generic-button"><i class="flex items-center far fa-copy mr-2"
                                    style="font-size:11px;"></i> <span class="title" title="Copy &amp; Edit">Copy &amp;
                                    Edit</span> </button>
                              </div><button
                                class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3  rounded other relative min-w-max"
                                aria-label="Save the quiz" type="button" translate="no" data-testid="generic-button"><i
                                  class="flex items-center far fa-folder mr-2" style="font-size:11px;"></i> <span
                                  class="title" title="Save">Save</span> </button>
                            </div>
                          </div>
                        </div>
                      </div> <!-- Content -->
                      <div class="pb-4" data-cy="quiz-content-container">
                        <div class="">
                          <div class="flex space-x-2">
                            <div
                              class="bg-lilac hover:bg-lilac-light base h-10 flex-1 md:h-15 rounded-lg q-shadow shine-div">
                              <button data-v-2a322e8d="" data-v-44b2acb7="" class="transition-colors duration-200 ease-in-out flex items-center px-4 py-2.5 text-lg font-semibold q-shadow mb-1 h-full base bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded-lg special relative w-full justify-center md:justify-start !h-13 v-popper--has-tooltip" aria-label="Bắt đầu ngay" type="button" translate="no" data-testid="start-live-button" data-cy="start-live-button"><i data-v-0c326293="" data-v-2a322e8d="" class="flex items-center fas fa-chalkboard-teacher mr-2" style="font-size: 16px;"></i><!--v-if--><span data-v-2a322e8d="" class="title text-base md:text-lg truncate md:w-full xs:text-left" title="Bắt đầu ngay">Bắt đầu ngay</span><!--v-if--><i data-v-0c326293="" data-v-2a322e8d="" class="flex items-center fas fa-caret-right ml-auto" style="font-size: 16px;"></i><!--v-if--><!--v-if--><!--v-if--><!--v-if--></button>
                            </div>
                            <div
                              class="bg-lilac hover:bg-lilac-light base h-10 flex-1 md:h-15 rounded-lg q-shadow shine-div">
                              <button data-v-2a322e8d="" data-v-44b2acb7="" class="transition-colors duration-200 ease-in-out flex items-center justify-center px-7.5 py-2.5 text-lg font-semibold q-shadow mb-1 h-full base bg-lilac-faded text-lilac hover:text-lilac-light active:text-lilac-dark rounded-lg secondary relative w-full md:justify-start !h-13 v-popper--has-tooltip" aria-label="Giao bài" type="button" translate="no" data-testid="asynchronous-learning-button"><i data-v-0c326293="" data-v-2a322e8d="" class="flex items-center fas fa-clock mr-2" style="font-size: 16px;"></i><!--v-if--><span data-v-2a322e8d="" class="title text-base md:text-lg truncate md:w-full md:text-left" title="Giao bài">Giao bài</span><!--v-if--><i data-v-0c326293="" data-v-2a322e8d="" class="flex items-center fas fa-caret-right ml-2" style="font-size: 16px;"></i><!--v-if--><!--v-if--><!--v-if--><!--v-if--></button>
                            </div>
                          </div>
                        </div>
                        <div style="display:none;" class="md:hidden">
                          <div
                            class="relative w-full mt-5 class bg-lilac-faded border-1 border-lilac-light rounded-lg flex items-center justify-start space-x-2 overflow-hidden">
                            <div class="h-full w-18">
                              <div class="w-full h-full">
                                <!-- Added default image in case of ssr, because in ssr it's not known what size of image to load. Once page is loaded on browser then only one required image will be fetched --><img
                                  src="../../../../cf.quizizz.com/img/logos/new/logo_placeholder_sm.png"
                                  alt="Player avatar" class="object-contain w-full h-full lazy-img rounded-inherit">
                              </div>
                            </div>
                            <div class="flex-1 flex flex-col py-4 pr-2">
                              <h1 class="text-dark-1 font-semibold text-sm"><span>Introducing new</span> <span
                                  class="text-lilac font-bold italic"><span>Paper mode</span></span></h1>
                              <p class="text-dark-80% text-xs"><span>No student devices needed.</span> <span
                                  class="text-dark-1 underline cursor-pointer"><span>Know more</span></span></p>
                            </div>
                          </div>
                        </div>
                        <div translate="no" class="hidden md:flex justify-between mb-4 mt-7">
                          <div class="flex items-center text-base"><i class="flex items-center fas fa-tasks text-dark-3"
                              style="font-size:12px;"></i>
                            <p translate="no" class="mx-2 text-dark-2">9 questions</p>
                          </div>
                          <div class="flex"><button
                              class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max mx-1 mx-1"
                              aria-label="Show answers" type="button" translate="no"
                              data-testid="qp-show-answer-button"><i class="flex items-center far fa-eye mr-2"
                                style="font-size:11px;"></i> <span class="title" title="Show answers">Show
                                answers</span> </button><button
                              class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max mx-1 mx-1"
                              aria-label="Preview quiz" type="button" translate="no"
                              data-testid="qp-preview-quiz-button"><i class="flex items-center fas fa-play mr-2"
                                style="font-size:11px;"></i> <span class="title" title="Preview">Preview</span>
                            </button>
                          </div>
                        </div>
                        <div translate="no"
                          class="-mb-2 flex md:hidden justify-between px-4 pt-3 pb-4 text-xs rounded-t-lg text-dark-3 bg-dark-6 mt-7">
                          <div class="flex"><span class="mr-2">Show Answers</span>
                            <div class="switch block relative sm"><input id="" aria-label=""
                                class="switch__input absolute mr-2 w-px h-px overflow-hidden cursor-pointer"
                                type="checkbox" value="false" data-cy=":switch-box" name=""
                                data-testid="generic-checkbox"><label
                                class="default cursor-pointer label-bg-dark switch__label flex items-center whitespace-nowrap relative select-none"
                                style="--bgColor:rgba(9, 9, 9, 0.1);" for="" data-testid="generic-label">
                                <div class="sr-only"></div>
                              </label></div>
                          </div>
                          <div class="cursor-pointer"><span class="mr-2">See
                              Preview</span><i class="flex items-center far fa-angle-right" style="font-size:11px;"></i>
                          </div>
                        </div>
                        <ul class="relative grid gap-4">
                          <li class="">
                            <div data-testid="question-details-card-top-0"
                              class="question-details-card flex flex-col border border-solid border-dark-6 rounded-lg mb-4 rounded cursor-pointer bg-light-3 hover:bg-light-2"
                              data-cy="question-details-card" role="button" aria-label="Question 1"
                              quizhasallmcqs="false">
                              <div class="shadow-sm p-4 rounded-t-lg">
                                <div class="question-details-card-question-text">
                                  <!-- ['teleport', 'quiz-editor', 'quiz-page', 'see-more', 'recommended-for-you', 'preview-questions-in-cart', 'search', 'responses', 'preview'] -->
                                  <div class="flex justify-between h-6 mb-4">
                                    <div class="flex flex-col xs:flex-row gap-2 xs:gap-0"><span
                                        class="inline-flex items-center min-w-max">
                                        <div translate="no"
                                          class="lozenge items-center inline-flex text-xs font-semibold py-0.5 rounded px-1.5">
                                          <span class="mr-2"><span data-testid="question-type-icon-container"
                                              class="question-type-icon relative flex items-center justify-center text-brand-b"><i
                                                class="flex items-center far fa-check-square" style="font-size:11px;"
                                                data-testid="question-type-icon"></i></span></span> <span class="">1.
                                            Multiple Choice</span>
                                        </div>
                                      </span> </div> <span class="ml-auto self-start flex">
                                      <div class="flex show-on-hover">
                                        <div data-testid="for-super-container" class="for-super mr-2">
                                          <button
                                            class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 base bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded primary relative min-w-max"
                                            aria-label="Edit this question" type="button" translate="no"
                                            data-testid="quiz-details-edit-0-button"><i
                                              class="flex items-center far fa-pencil mr-2" style="font-size:11px;"></i>
                                            <span class="title" title="Edit">Edit</span> </button>
                                        </div><button
                                          class="transition-colors duration-200 ease-in-out flex flex items-center justify-center w-6 h-6 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max"
                                          aria-label="Report an issue in question 1" type="button" translate="no"
                                          data-testid="generic-button"><i
                                            class="flex items-center far fa-exclamation-triangle"
                                            style="font-size:11px;"></i> <span class="title" title></span> </button>
                                      </div>
                                      <div class="transform transition-transform origin-top flex">

                                      </div>
                                      <div class="flex hide-on-hover h-6">
                                        <div translate="no"
                                          class="lozenge items-center inline-flex text-xs font-semibold py-0.5 rounded px-1.5 ml-2 border bg-light-3 border-dark-6 min-w-max">
                                          <i class="flex items-center far fa-clock mr-1"
                                            style="font-size:11px;"></i><span class="">30 seconds</span>
                                        </div>
                                        <div translate="no"
                                          class="lozenge items-center inline-flex text-xs font-semibold py-0.5 rounded px-1.5 ml-2 border bg-light-3 border-dark-6 min-w-max">
                                          <i class="flex items-center far fa-check-circle mr-1"
                                            style="font-size:11px;"></i><span class="">1
                                            pt</span>
                                        </div>
                                      </div>
                                    </span>
                                  </div>
                                  <div class="items-center mb-4 flex gap-2">
                                    <div
                                      class="text-dark-2 items-center question-wrapper text-sm flex overflow-hidden w-full">
                                      <span observe-mutation="quiz_question_0">
                                        <p>Do đâu thời tiết đới ôn hoà thay đổi thất thường?</p>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                                <div class="flex flex-wrap">
                                  <div class="w-full flex items-start mb-2"> <span
                                      class="bg-dark-6 w-4 h-4 rounded-full my-1 mr-2 shrink-0 relative"> </span><span
                                      class="text-dark-2 text-sm" observe-mutation="quiz_question_option_0_0">
                                      <p>do đợt khí nóng ở chí tuyến và các đợt khí lạnh ở vùng cực</p>
                                    </span> </div>
                                  <div class="w-full flex items-start mb-2"> <span
                                      class="bg-dark-6 w-4 h-4 rounded-full my-1 mr-2 shrink-0 relative"> </span><span
                                      class="text-dark-2 text-sm" observe-mutation="quiz_question_option_0_1">
                                      <p>do gió Tây ôn đới và các khối khí từ đại dương mang theo không khí ẩm và ấm vào
                                        đất liền</p>
                                    </span> </div>
                                  <div class="w-full flex items-start mb-2"> <span
                                      class="bg-dark-6 w-4 h-4 rounded-full my-1 mr-2 shrink-0 relative"> </span><span
                                      class="text-dark-2 text-sm" observe-mutation="quiz_question_option_0_2">
                                      <p>do vị tri trung gian</p>
                                    </span> </div>
                                  <div class="w-full flex items-start mb-2"> <span
                                      class="bg-dark-6 w-4 h-4 rounded-full my-1 mr-2 shrink-0 relative"> </span><span
                                      class="text-dark-2 text-sm" observe-mutation="quiz_question_option_0_3">
                                      <p>do có đợt khí nóng hay đợt khí lạnh tràn đến</p>
                                    </span> </div>
                                </div>
                                <!-- Custom Response --> <!-- Topics -->
                              </div>
                            </div>
                          </li>
                        </ul>
                        <button
                          class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1.5 text-xs font-semibold h-8 text-lilac hover:text-lilac-light active:text-lilac-dark rounded link-no-bg relative min-w-max -mx-4 mt-4 -mx-4 mt-4"
                          aria-label="Report an issue" type="button" translate="no" data-testid="generic-button"
                          style=""> <span class="title" title="Report an issue">Report an
                            issue</span> </button>
                      </div>
                    </div>
                  </div><svg class="fill-current absolute invisible hidden svg-shapes-import">
                    <defs>
                      <path id="rectangle" d="M0 0h100v100H0z" style="vector-effect:non-scaling-stroke;"></path>
                      <path id="triangle" d="m50 0 50 100H0z" style="vector-effect:non-scaling-stroke;"></path>
                      <path id="star"
                        d="m51 1.618 11.424 35.159.112.345h37.331L69.96 58.852l-.294.213.112.345L81.202 94.57l-29.908-21.73-.294-.213-.294.214-29.908 21.729L32.222 59.41l.112-.345-.294-.214L2.134 37.122h37.331l.112-.345z"
                        style="vector-effect:non-scaling-stroke;"></path>
                      <path id="line_2d" d="M0 0h100v95H0z" style="vector-effect:non-scaling-stroke;"></path>
                      <path id="arrow_2d" fill="none" stroke-linejoin="round" d="M0 50h100L90 80m10-30L90 20"
                        style="vector-effect:non-scaling-stroke;"></path>
                      <circle id="ellipse" cx="50" cy="50" r="50" style="vector-effect:non-scaling-stroke;"></circle>
                      <rect id="rounded_rectangle" width="100" height="100" x="0" y="0" rx="10"
                        style="vector-effect:non-scaling-stroke;"></rect>
                    </defs>
                  </svg>
                </div>

              </section>
            </div>
          </div>
        </div>
        <nav translate="no" class="bottom-nav-wrapper flex negative-shadow-md md:hidden" style="">
          <div class="flex items-center justify-around px-4 bg-light">
            <div>
              <div><a href="/" class="flex flex-col items-center py-2 space-y-1"><img
                    src="https://cf.quizizz.com/img/navigation/bottom_nav_explore_deselected.webp" class="w-4 h-4"
                    height="16" width="16" alt="admin-quizType-id-slug">
                  <div class="capitalize">explore</div>
                </a></div>
            </div>
            <div>
              <div>
                <div class="flex flex-col items-center py-2 space-y-1"><i class="flex items-center fal fa-books"
                    style="font-size:16px;"></i>
                  <div class="capitalize">library</div>
                </div>
              </div>
            </div>
            <div>
              <div>
                <div class="flex flex-col items-center py-2 space-y-1"><i
                    class="flex items-center fas fa-plus-circle create-icon" style="font-size:16px;"></i>
                  <div class="capitalize">create</div>
                </div>
              </div>
            </div>
            <div>
              <div>
                <div class="flex flex-col items-center py-2 space-y-1"><i class="flex items-center fal fa-analytics"
                    style="font-size:16px;"></i>
                  <div class="capitalize">reports</div>
                </div>
              </div>
            </div>
            <div>
              <div>
                <div class="flex flex-col items-center py-2 space-y-1"><i class="flex items-center fal fa-users-class"
                    style="font-size:16px;"></i>
                  <div class="capitalize">classes</div>
                </div>
              </div>
            </div>
          </div>
        </nav> <svg class="fill-current absolute invisible hidden svg-shapes-import md:block">
          <defs>
            <path id="rectangle" d="M0 0h100v100H0z" style="vector-effect:non-scaling-stroke;"></path>
            <path id="triangle" d="m50 0 50 100H0z" style="vector-effect:non-scaling-stroke;"></path>
            <path id="star"
              d="m51 1.618 11.424 35.159.112.345h37.331L69.96 58.852l-.294.213.112.345L81.202 94.57l-29.908-21.73-.294-.213-.294.214-29.908 21.729L32.222 59.41l.112-.345-.294-.214L2.134 37.122h37.331l.112-.345z"
              style="vector-effect:non-scaling-stroke;"></path>
            <path id="line_2d" d="M0 0h100v95H0z" style="vector-effect:non-scaling-stroke;"></path>
            <path id="arrow_2d" fill="none" stroke-linejoin="round" d="M0 50h100L90 80m10-30L90 20"
              style="vector-effect:non-scaling-stroke;"></path>
            <circle id="ellipse" cx="50" cy="50" r="50" style="vector-effect:non-scaling-stroke;"></circle>
            <rect id="rounded_rectangle" width="100" height="100" x="0" y="0" rx="10"
              style="vector-effect:non-scaling-stroke;"></rect>
          </defs>
        </svg>
      </div>
    </div>
    <div id="overlay-layer-1" class="z-1 absolute"></div>
    <div id="modal-layer-2" class="z-5 absolute"></div>
    <div id="modal-overlay-layer-3" class="z-10 absolute"></div>
    <div id="third-party-layer-4" class="z-20 absolute"></div>
    <div id="layer-1" class="z-1 absolute"></div>
    <div id="layer-2" class="z-5 absolute"></div>
    <div id="layer-3" class="z-10 absolute"></div>
    <div id="layer-4" class="z-20 absolute"></div>
    <div id="layer-5" class="z-50 absolute"></div>
  </div>
  <!--render-styles-->

  <div id="client-app" style="display: none;"></div>
</body>
@endsection
