<template>
    <div>
        <section class="header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div
                            class="p-2 header-email text-sm-left text-md-left text-lg-left text-xl-left">
                            <i class="fas fa-envelope"></i> <span>Email</span> <a href="#"> buddhajyoti@gmail.com</a>
                        </div>
                        <div class="p-2 header-address">
                            <i class="fas fa-map-marker-alt"></i> Buddha Jyoti Address
                        </div>
                        <div
                            class="py-2 ml-auto header-connect">
                            <span>Connect with us:</span> <a href="#"><i
                            class="fab fa-facebook-square"></i> </a> <a href="#"><i
                            class="fab fa-twitter-square"></i> </a> <a href="#"><i
                            class="fab fa-instagram-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mid">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
                    <div class="container">
                        <a class="navbar-brand" href="#" id="logo">
                            <img src="images/logo.png" alt="Buddha Jyoti Logo"> Buddha Jyoti
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                       role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        About
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">About Us</a>
                                        <a class="dropdown-item" href="#">History</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Our Team</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Facilities</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Teachers</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2"
                                       role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Information
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="#">News and Notices</a>
                                        <a class="dropdown-item" href="#">Upcoming Events</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Blog</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div>

            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: "websiteTop"
    }
</script>

<style scoped>
    .header-top {
        background: #f8fafc;
        font-family: 'Baloo Bhai 2', cursive;
        font-size: 16px;
    }
    .header-top i, .header-top a{
        color: #bc001e !important;
    }
    .header-top i:hover, .header-top a:hover{
        color: #a9000b !important;
        text-decoration:none;
    }

    @media screen and (max-width: 768px) {
        .header-top {
            display: none;
        }
    }
</style>
