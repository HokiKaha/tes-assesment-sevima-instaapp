<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import SidebarSuggestions from '../Components/InstaClone/SidebarSuggestions.vue'
</script>


<template>
    <AppLayout title="Dashboard">
        <template #header>
            <div class="d-flex justify-content-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Teman
                </h2>

                <div style="margin-top: -12px; width: 400px;">
                    <div class="input-group w-95" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="searchDropdown">
                        <input type="text" class="form-control search-input" placeholder="Cari orang-orang yang ingin berteman" aria-label="Search" aria-describedby="search-addon">
                        <div class="input-group-append">
                            <button class="btn search-button" type="button"><i class="bx bx-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white py-3 px-4 shadow-sm">
                    <div class="card-head d-flex justify-content-between">
                        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Teman terbaru saya</h1>
                        <a href="#" class="btn btn-link">Lihat Semua</a>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-3 col-sm-6">
                            <div class="card group-card shadow-sm">
                                <img src="assets/images/groups/group-2.jpg" class="card-img-top group-card-image" alt="Group image">
                                <div class="card-body">
                                    <h5 class="card-title">Tourism</h5>
                                    <p class="card-text">2.5k Members 35+ post a week</p>
                                    <a href="#" class="btn btn-quick-link join-group-btn border w-100">Join</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="card group-card shadow-sm">
                                <img src="assets/images/groups/group-3.jpg" class="card-img-top group-card-image" alt="Group image">
                                <div class="card-body">
                                    <h5 class="card-title">Reading Books</h5>
                                    <p class="card-text">1.3k Members 10+ post a day</p>
                                    <a href="#" class="btn btn-quick-link join-group-btn border w-100">Join</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="card group-card shadow-sm">
                                <img src="assets/images/groups/group-4.jpg" class="card-img-top group-card-image" alt="Group image">
                                <div class="card-body">
                                    <h5 class="card-title">Capture The Best</h5>
                                    <p class="card-text">2.8k Members 8+ post a day</p>
                                    <a href="#" class="btn btn-quick-link join-group-btn border w-100">Join</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>




<style lang="scss">
$primaryColor: #fafafa;
$secondaryColor: #efefef;
$borderColor: #dbdbdb;
$tabTextColor: #8e8e8e;

@mixin buttonStyle {
  background-color: transparent;
  border: none;
}

* {
  margin: 0;
  padding: 0;
}
body {
  background-color: $primaryColor;
}

.d-flex {
    display: flex
}

.align-items-center {
    align-items: center;
}

.profile {
  margin-top: 100px;
  margin-bottom: 25px;

  &__header {
    background-color: white;
    border-bottom: 1px solid $borderColor;
    padding: 10px 20px;
    position: fixed;
    width: 100%;
    top: 0;
  }

  &__logo {
    object-fit: contain;

    img {
      width: 150px;
    }
  }

  &__searchBar {
    input[type="text"] {
      width: 300px;
      background-color: $secondaryColor;
      border-radius: 5px;
      border: none;
    }
  }

  &__settings {
    display: flex;

    button {
      width: 52px;
      height: 52px;
      @include buttonStyle;

      svg {
        width: 28px;
        height: 28px;
      }
    }
    img {
      width: 28px;
      object-fit: contain;
      border: 1px solid black;
      border-radius: 100%;
    }
  }

  &__profile {
    margin-top: 50px;
    margin-bottom: 30px;

    &__logo {
      flex: 1;
      text-align: center;

      img {
        width: 150px;
        object-fit: contain;
        border-radius: 100%;
        border: 3px solid black;
      }
    }

    &__details {
      flex: 2;

      &__userName {
        display: flex;
        align-items: center;
        gap: 20px;

        h4 {
          font-weight: normal;
        }

        button {
          background-color: transparent;
          border: 1px solid $borderColor;
          border-radius: 5px;
          padding: 2px 5px;

          &:last-child {
            border: none;
          }
        }
      }

      &__follower {
        display: flex;
        gap: 20px;

        button {
          @include buttonStyle;
        }
      }
    }
  }

  &__section {
    &__tab {
      overflow: hidden;
      border-top: 1px solid $borderColor;
      display: flex;
      justify-content: center;
      margin: 0 0 10px 0;

      button {
        @include buttonStyle;
        padding: 20px 0px 0px 0px;
        margin: 0 20px;
        transition: 0.3s;
        font-size: 14px;
        color: $tabTextColor;
        display: flex;
        justify-content: center;
        align-items: center;
        text-transform: uppercase;

        svg {
          margin-right: 5px;
        }
      }

      &__tabcontent {
        display: none;

        &__container {
          max-width: 1300px;

          &__image {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            img {
              width: 30%;
              object-fit: contain;
              flex: 1;

              &:nth-child(2) {
                margin: 7px 14px;
              }
            }
          }
        }
      }
      .active {
        border-top: 2px solid #5c5c5c;
        color: #5c5c5c;
      }
    }
  }
}

</style>
