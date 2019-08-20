<section class="main-section scrollable" id="home">
        <div class="top-nav d-flex flex-column">
            <div class="head-nav-wrapper">
                <header class="container hidden-top">
                    <div class="row">
                        <div class="col-sm-8 col-md-8 col-lg-8 p-4">
                            <div class="d-flex flex-row">
                                <span class="small-logo">
                                    @include('svgs/smallLogo')
                                </span>
                                <div class="d-flex flex-column logo-text-container">
                                    <h1 class="m-0 p-0">UNIVERSAL</h1>
                                    <h1 class="m-0 p-0 text-color-yellow">FORKLIFT</h1>
                                    <h1 class="m-0 p-0">SERVICE</h1>
                                </div>
                            </div>
                        </div>
                        <div class="top-right-header d-flex flex-column justify-content-center p-4 col-sm-4 col-md-4 col-lg-4">
                            <h1 class="text-light call-now">CALL NOW!</h1>
                            <h1 class="phone-number">323-705-9405</h1>
                        </div>
                    </div>
                </header>


            <div class="mobile-nav container-fluid">
                <span class="hamburger-icon">
                        @include('svgs/hamburger_icon')
                </span>
                <span class="small-logo-mobile">
                        @include('svgs/smallLogo')
                </span>
            </div>
            <nav class="nav-container main" role="main">
                <div class="container">
                    <nav id="navigation" class="scroll-nav">
                        <ul>
                            <li class="current"><a class="nav-click" href="#home">HOME</a></li>
                            <li><a class="nav-click" href="#services">SERVICES</a></li>
                            <li><a class="nav-click" href="#contact">CONTACT</a></li>
                            <li><a class="nav-click" href="#about">ABOUT</a></li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
            <div class="container hero-container flex-grow-1">
                <div class="row d-flex flex-row hero-row">
                    <div class="col-lg-4 hero-column-left"></div>
                    <div class="col-lg-4 hero-column-middle"></div>

                    <div class="hero-column pl-4 col-lg-4 d-flex flex-column justify-content-center">

                        <div class="text-wrapper-large">
                            <h1>QUALITY</h1>
                            <h1>FORKLIFT</h1>
                            <h1>REPAIR</h1>
                        </div>

                        <div class="text-wrapper-small">
                            <h1>UNIVERSAL</h1>
                            <h1 class="forklift-yellow">FORKLIFT</h1>
                            <h1>SERVICE</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
