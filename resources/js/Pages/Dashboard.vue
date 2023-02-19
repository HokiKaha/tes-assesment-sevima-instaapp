<script setup>
import Header from '@/Components/InstaClone/Header.vue'
import Postingan from '@/Components/InstaClone/Postingan.vue'
import Stories from '@/Components/InstaClone/Stories.vue'
import SidebarSuggestions from '@/Components/InstaClone/SidebarSuggestions.vue'
</script>


<template>
    <div class="messenger">
        <div class="container-fluid newsfeed d-flex" id="wrapper">
        <div class="row newsfeed-size f-width">
            <div class="col-md-12 message-right-side">
                <nav id="navbar-main" class="navbar navbar-expand-lg shadow-sm sticky-top">
                    <ul class="navbar-nav mr-5" id="main_menu">
                        <a class="navbar-brand nav-item mr-lg-5" href="index.html"><img src="assets/images/logo-64x64.png" width="40" height="40" class="mr-3" alt="Logo"></a>


                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <form class="w-30 mx-2 my-auto d-inline form-inline mr-5">
                            <div class="input-group">
                                <input type="text" class="form-control search-input w-75" placeholder="Search for people, companies, events and more..." aria-label="Search" aria-describedby="search-addon">
                                <div class="input-group-append">
                                    <button class="btn search-button" type="button"><i class='bx bx-search'></i></button>
                                </div>
                            </div>
                        </form>
                        <li class="nav-item dropdown d-mobile">
                            <a href="#" class="nav-link nav-icon nav-links drop-w-tooltip" data-toggle="dropdown" data-placement="bottom" data-title="Create" role="button" aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/icons/navbar/create.png" alt="navbar icon">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right nav-dropdown-menu">
                                <a href="#" class="dropdown-item" aria-describedby="createGroup">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class='bx bx-group post-option-icon'></i>
                                        </div>
                                        <div class="col-md-10">
                                            <span class="fs-9">Group</span>
                                            <small id="createGroup" class="form-text text-muted">Find people with shared interests</small>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item" aria-describedby="createEvent">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class='bx bx-calendar post-option-icon'></i>
                                        </div>
                                        <div class="col-md-10">
                                            <span class="fs-9">Event</span>
                                            <small id="createEvent" class="form-text text-muted">bring people together with a public or private event</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown d-mobile">
                            <a href="#" class="nav-link nav-links nav-icon drop-w-tooltip" data-toggle="dropdown" data-placement="bottom" data-title="Pages" role="button" aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/icons/navbar/flag.png" alt="navbar icon">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right nav-drop">
                                <a class="dropdown-item" href="newsfeed-2.html">Newsfeed 2</a>
                                <a class="dropdown-item" href="sign-in.html">Sign in</a>
                                <a class="dropdown-item" href="sign-up.html">Sign up</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link nav-links" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <div class="menu-user-image">
                                    <img src="assets/images/users/user-4.jpg" class="menu-user-img ml-1" alt="Menu Image">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right nav-drop">
                                <a class="dropdown-item" href="profile.html"><i class='bx bx-user mr-2'></i> Account</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class='bx bx-undo mr-2'></i> Logout</a>
                            </div>
                        </li>
                        <li class="nav-item nav-icon">
                            <a href="settings.html" data-toggle="tooltip" data-placement="bottom" data-title="Settings" class="nav-link"><img src="assets/images/icons/navbar/settings.png" class="nav-settings" alt="navbar icon"></a>
                        </li>
                    </ul>
                </nav>
                <div class="row message-right-side-content">
                    <div class="col-md-12">
                        <div id="message-frame">
                            <div class="message-sidepanel">
                                <div class="message-contacts settings-sidebar">
                                    <ul class="conversations">
                                        <h6 class="p-3">General Settings</h6>
                                        <li class="contact setting-active">
                                            <a href="settings.html" class="wrap d-flex align-items-center">
                                                <img src="assets/images/icons/settings/account.png" class="settings-icon" alt="Settings left sidebar">
                                                <div class="meta">
                                                    <p>Your Account</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="contact">
                                            <a href="settings-contact.html" class="wrap d-flex align-items-center">
                                                <img src="assets/images/icons/settings/contact.png" class="settings-icon" alt="Settings left sidebar">
                                                <div class="meta">
                                                    <p>Contact Info</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="contact">
                                            <a href="#" class="wrap d-flex align-items-center">
                                                <img src="assets/images/icons/settings/privacy.png" class="settings-icon" alt="Settings left sidebar">
                                                <div class="meta">
                                                    <p>Privacy</p>
                                                </div>
                                            </a>
                                        </li>
                                        <h6 class="p-3">Security &#38; Login</h6>
                                        <li class="contact">
                                            <a href="settings-password.html" class="wrap d-flex align-items-center">
                                                <img src="assets/images/icons/settings/account.png" class="settings-icon" alt="Settings left sidebar">
                                                <div class="meta">
                                                    <p>Password</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="contact">
                                            <a href="#" class="wrap d-flex align-items-center">
                                                <img src="assets/images/icons/settings/security-question.png" class="settings-icon" alt="Settings left sidebar">
                                                <div class="meta">
                                                    <p>Security Question</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="contact">
                                            <a href="settings-fingerprint.html" class="wrap d-flex align-items-center">
                                                <div class="meta"></div>
                                                <p><img src="assets/images/icons/settings/fingerprint.png" class="settings-icon" alt="Settings left sidebar"> Fingerprint Lock</p>
                                            </a>
                                        </li>
                                        <li class="contact">
                                            <a href="settings-location.html" class="wrap d-flex align-items-center">
                                                <div class="meta"></div>
                                                <p><img src="assets/images/icons/settings/location.png" class="settings-icon" alt="Settings left sidebar"> Location</p>
                                            </a>
                                        </li>
                                        <h6 class="p-3">Billing &#38; Payment</h6>
                                        <li class="contact">
                                            <a href="settings-billing-method.html" class="wrap d-flex align-items-center">
                                                <div class="meta"></div>
                                                <p><img src="assets/images/icons/settings/wallet.png" class="settings-icon" alt="Settings left sidebar"> Billing Method</p>
                                            </a>
                                        </li>
                                        <li class="contact">
                                            <a href="#" class="wrap d-flex align-items-center">
                                                <div class="meta"></div>
                                                <p><img src="assets/images/icons/settings/credit-card.png" class="settings-icon" alt="Settings left sidebar"> Automatic Payments</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <div class="settings-form p-4">
                                    <h2>Your Account</h2>
                                    <form action="" method="" class="mt-4 settings-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="settingsFirstName">First Name</label>
                                                <input type="text" class="form-control" id="settingsFirstName" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="settingsLastName">Last Name</label>
                                                <input type="text" class="form-control" id="settingsLastName" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-row mb-3 align-items-center">
                                                <div class="col">
                                                    <label for="settingsUsername">Username</label>
                                                    <input type="email" class="form-control" id="settingsUsername" aria-describedby="usernameHelp" value="arthur_minasyan_96" placeholder="Username">
                                                    <small id="usernameHelp" class="form-text text-muted">Your public username is the same as your timeline address.</small>
                                                </div>
                                                <div class="col check-username">
                                                    <span><i class='bx bx-check success'></i> Username is available</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <button type="submit" class="btn btn-primary btn-sm">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>
