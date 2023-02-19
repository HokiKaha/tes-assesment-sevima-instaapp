<script setup>
import UserProfileLayout from '../../Layouts/UserProfileLayout.vue'
import AppLayout from '@/Layouts/AppLayout.vue';
import DeleteUserForm from '@/Pages/Profile/Partials/DeleteUserForm.vue';
import LogoutOtherBrowserSessionsForm from '@/Pages/Profile/Partials/LogoutOtherBrowserSessionsForm.vue';
import SectionBorder from '@/Components/SectionBorder.vue';
import TwoFactorAuthenticationForm from '@/Pages/Profile/Partials/TwoFactorAuthenticationForm.vue';
import UpdatePasswordForm from '@/Pages/Profile/Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from '@/Pages/Profile/Partials/UpdateProfileInformationForm.vue';
import UploadContent from '../../Components/InstaClone/UploadContent.vue';

defineProps({
    confirmsTwoFactorAuthentication: Boolean,
    sessions: Array,
});
</script>

<template>
    <AppLayout title="Profile">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Profile Saya
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="row profile-rows">
                    <div class="col-md-3">
                        <div class="profile-info-left">
                            <div class="text-center">
                                <div class="profile-img w-shadow">
                                    <div class="profile-img-overlay"></div>
                                    <img src="/assets/images/users/user-4.jpg" alt="Avatar" class="avatar img-circle">
                                    <div class="profile-img-caption">
                                        <label for="updateProfilePic" class="upload">
                                            <i class="bx bxs-camera"></i> Update
                                            <input type="file" id="updateProfilePicInput" class="text-center upload">
                                        </label>
                                    </div>
                                </div>
                                <p class="profile-fullname mt-3">Arthur Minasyan</p>
                                <p class="profile-username mb-3 text-muted">@arthur_minasyan</p>
                            </div>
                            <div class="intro mt-4">
                                <div class="d-flex">
                                    <button type="button" class="btn btn-follow mr-3 w-100">
                                        <i class="bx bx-plus"></i> Ikuti
                                    </button>
                                </div>
                            </div>
                            <div class="intro mt-5 mv-hidden">
                                <div class="intro-item d-flex justify-content-between align-items-center">
                                    <h3 class="intro-about">Intro</h3>
                                </div>
                                <div class="intro-item d-flex justify-content-between align-items-center">
                                    <p class="intro-title text-muted"><i class="bx bx-briefcase text-primary"></i> Web Developer at <a href="#">Company Name</a></p>
                                </div>
                                <div class="intro-item d-flex justify-content-between align-items-center">
                                    <p class="intro-title text-muted"><i class="bx bx-map text-primary"></i> Lives in <a href="#">City, Country</a></p>
                                </div>
                                <div class="intro-item d-flex justify-content-between align-items-center">
                                    <p class="intro-title text-muted"><i class="bx bx-time text-primary"></i> Last Login <a href="#">Online <span class="ml-1 online-status bg-success"></span></a></p>
                                </div>

                                <div class="intro-item mt-5">
                                    <ul class="nav nav-tabs flex-column" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="btn btn-quick-link join-group-btn border w-100" id="tab-1-tab" data-toggle="tab" data-target="#tab-1" type="button" role="tab" aria-controls="tab-1" aria-selected="true">
                                                Profil
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="btn btn-quick-link join-group-btn border w-100 mt-3" id="tab-2-tab" data-toggle="tab" data-target="#tab-2" type="button" role="tab" aria-controls="tab-2" aria-selected="false">
                                                Edit Informasi Profil
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="btn btn-quick-link join-group-btn border w-100 mt-3" id="tab-3-tab" data-toggle="tab" data-target="#tab-3" type="button" role="tab" aria-controls="tab-3" aria-selected="false">
                                                Ubah Password
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="btn btn-quick-link join-group-btn border w-100 mt-3" id="tab-4-tab" data-toggle="tab" data-target="#tab-4" type="button" role="tab" aria-controls="tab-4" aria-selected="false">
                                                Otentikasi Dua Faktor
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="btn btn-quick-link join-group-btn border w-100 mt-3" id="tab-5-tab" data-toggle="tab" data-target="#tab-5" type="button" role="tab" aria-controls="tab-5" aria-selected="false">
                                                Informasi Login
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="btn btn-quick-link join-group-btn border w-100 mt-3" id="tab-6-tab" data-toggle="tab" data-target="#tab-6" type="button" role="tab" aria-controls="tab-6" aria-selected="false">
                                                Hapus Akun
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="intro mt-5 row mv-hidden">
                                <div class="col-md-4">
                                    <img src="assets/images/users/album/album-1.jpg" width="95" alt="">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/images/users/album/album-2.jpg" width="95" alt="">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/images/users/album/album-3.jpg" width="95" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 p-0">
                        <div class="profile-info-right">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1-tab">
                                    <div class="row px-2">
                                        <div class="col-md-12 profile-center">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="timeline-tab" data-toggle="tab" data-target="#timeline" type="button" role="tab" aria-controls="timeline" aria-selected="true">
                                                        TimeLine
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="friends-tab" data-toggle="tab" data-target="#friends" type="button" role="tab" aria-controls="friends" aria-selected="false">
                                                        Teman
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="bg-white py-3 px-4 shadow-sm">
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                                                        <UploadContent />
                                                        <div class="post border-bottom p-3 bg-white">
                                                            <div class="media text-muted pt-3">
                                                                <img src="/assets/images/users/user-4.jpg" alt="Online user" class="mr-3 post-user-image">
                                                                <div class="media-body pb-3 mb-0 small lh-125">
                                                                    <div class="d-flex justify-content-between align-items-center w-100 mt-3">
                                                                        <span class="post-type text-muted"><a href="#" class="text-gray-dark post-user-name mr-2">Arthur Minasyan</a> updated his cover photo.</span>
                                                                    </div>
                                                                    <span class="d-block">3 hours ago <i class="bx bx-globe ml-3"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="mt-3">
                                                                <p>Lorem 123 ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptatem veritatis harum, tenetur, quibusdam voluptatum, incidunt saepe minus maiores ea atque sequi illo veniam sint quaerat corporis totam et. Culpa?</p>
                                                            </div>
                                                            <div class="d-block mt-3">
                                                                <img src="/assets/images/users/post/post-1.jpg" class="w-100 mb-3" alt="post image">
                                                            </div>
                                                            <div class="mb-2">

                                                            <!-- Reactions -->
                                                            <div class="argon-reaction">
                                                                <span class="like-btn">
                                                                    <a href="#" class="post-card-buttons" id="reactions"><i class="bx bxs-like mr-2"></i> 67</a>
                                                                    <ul class="reactions-box dropdown-shadow">
                                                                        <li class="reaction reaction-like" data-reaction="Like"></li>
                                                                        <li class="reaction reaction-love" data-reaction="Love"></li>
                                                                        <li class="reaction reaction-haha" data-reaction="HaHa"></li>
                                                                        <li class="reaction reaction-wow" data-reaction="Wow"></li>
                                                                        <li class="reaction reaction-sad" data-reaction="Sad"></li>
                                                                        <li class="reaction reaction-angry" data-reaction="Angry"></li>
                                                                    </ul>
                                                                </span>
                                                            </div>

                                                            <a href="javascript:void(0)" class="post-card-buttons" id="show-comments"><i class="bx bx-message-rounded mr-2"></i> 5</a>
                                                            <div class="dropdown dropup share-dropup">
                                                                <a href="#" class="post-card-buttons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-share-alt mr-2"></i> Share
                                                                </a>
                                                                <div class="dropdown-menu post-dropdown-menu">
                                                                    <a href="#" class="dropdown-item">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <i class="bx bx-share-alt"></i>
                                                                            </div>
                                                                            <div class="col-md-10">
                                                                                <span>Share Now (Public)</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <i class="bx bx-share-alt"></i>
                                                                            </div>
                                                                            <div class="col-md-10">
                                                                                <span>Share...</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <i class="bx bx-message"></i>
                                                                            </div>
                                                                            <div class="col-md-10">
                                                                                <span>Send as Message</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="friends" role="tabpanel" aria-labelledby="friends-tab">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="card group-card shadow-sm">
                                                                    <img src="/assets/images/groups/group-2.jpg" class="card-img-top group-card-image" alt="Group image">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Tourism</h5>
                                                                        <p class="card-text">2.5k Members 35+ post a week</p>
                                                                        <a href="#" class="btn btn-quick-link join-group-btn border w-100">Join</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2-tab">
                                    <div v-if="$page.props.jetstream.canUpdateProfileInformation">
                                        <UpdateProfileInformationForm :user="$page.props.auth.user" />

                                        <SectionBorder />
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3-tab">
                                    <div v-if="$page.props.jetstream.canUpdatePassword">
                                        <UpdatePasswordForm class="mt-10 sm:mt-0" />

                                        <SectionBorder />
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4-tab">
                                    <div v-if="$page.props.jetstream.canManageTwoFactorAuthentication">
                                        <TwoFactorAuthenticationForm
                                            :requires-confirmation="confirmsTwoFactorAuthentication"
                                            class="mt-10 sm:mt-0"
                                        />
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="tab-5-tab">
                                    <LogoutOtherBrowserSessionsForm :sessions="sessions" class="mt-10 sm:mt-0" />
                                </div>
                                <div class="tab-pane fade" id="tab-6" role="tabpanel" aria-labelledby="tab-6-tab">
                                    <template v-if="$page.props.jetstream.hasAccountDeletionFeatures">
                                        <DeleteUserForm class="mt-10 sm:mt-0" />
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
