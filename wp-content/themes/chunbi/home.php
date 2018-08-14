<?php /* Template Name: home page */ ?>
<?php  get_header(); ?>
<!-- Main Content -->
<div class="container">
    <div class="wrap">
        <section id="about-us" class="item-homepage">
            <div class="about-me">
                <h2><?php the_field('title_about_us'); ?></h2>
                <div class="inner">
                    <p>
                        <?php the_field('description_about_us'); ?>
                    </p>
                </div>
            </div>
        </section>
        <section id="services" class="item-homepage">
            <div class="services">
                <h2><?php the_field('title_services'); ?></h2>
                <div class="inner">
                    <div class="row">
                        <div class="col-md-3 col-6 common-item-service">
                            <div class="item-service">
                                <a href="" class="link-item-service">
                                <span class="img web-app">
                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 211.7 226.7" style="enable-background:new 0 0 211.7 226.7;" xml:space="preserve">
                                    <path class="st1" d="M187.7,0c6.7,3.3,9.1,8.8,9.1,16.2c-0.1,42.1-0.1,84.3-0.1,126.4c0,1.3,0,2.6,0,3.9c-3.9,2.2-6,0.1-9.3-1.8  c-5.7-3.2-4.8-7.5-4.8-12.1c0-25.8,0-51.6,0-77.5c0-1.8,0-3.6,0-5.8c-56.5,0-112.7,0-169.3,0c0,47,0,94,0,141.6c2.1,0,4,0,5.9,0  c38,0,76,0,114,0c6,0,8,2.7,6.8,8.6c-0.5,2.4-0.3,4.9-0.4,8.1c-1.9,0-3.8,0-5.8,0c-39.2,0-78.3-0.2-117.4,0.1  C8.1,207.9,2,205.8-1.3,198c0-63,0-126,0-189c3-3,6-6,9-9C67.7,0,127.7,0,187.7,0z M162.1,25.9c0-6.5-1.2-7.9-6.7-7.9  c-5.3,0-6.7,1.7-6.7,8c0,6.2,1.5,8,6.7,8C160.9,34,162.1,32.5,162.1,25.9z M128.6,25.7c0,6.8,1,8.2,6.3,8.2c5.4,0.1,6.8-1.5,6.8-7.8  c0-6.7-1.1-8.1-6.4-8.2C129.7,17.9,128.6,19.2,128.6,25.7z M169.5,26.1c0,6.5,1.2,7.9,6.6,7.9c5.2,0,6.5-1.7,6.5-8.1  c0-6.3-1.4-7.9-6.8-7.8C170.4,18,169.4,19.3,169.5,26.1z"/>
                                    <path class="st2" d="M168.7,226c-0.5-0.4-0.9-1-1.5-1.1c-5.1-1.3-6.4-4-4.6-9.1c0.7-2-1.3-4.8-2-7.1c-1.7,0.3-2,0.3-2.3,0.5  c-7.2,4-7.3,4.1-10.4-3.9c-0.5-1.3,0.1-4.4,1-4.8c4.8-2.2,4.7-5.7,3.3-10.1c-0.6-0.2-1.4-0.5-2.2-0.5c-5.2-0.3-6-3.2-5.2-7.7  c0.8-4.4,1.7-7.5,7.2-5.3c0.8,0.3,2.8-0.5,3.1-1.3c0.8-1.8,1.7-4.3,1.1-5.8c-3.6-7.7-3.5-8.4,4.7-13.6c0.9,1.1,1.8,2.2,2.8,3.3  c0.8,1,1.7,2,2.4,2.9c4.4-0.4,6.5-2.3,5.8-6.8c-0.8-4.7,2.1-5,5.7-5.1c3.7,0,6.5,0.5,5.8,5c-0.7,4.4,1.3,6.5,5.8,6.8  c1.7-2,3.4-4.2,5.5-6.7c1.9,1.8,3.3,3.4,5,4.7c3.2,2.3,3.2,4.8,0.6,7.4c-2.4,2.4-2.3,4.5-0.6,7.4c1.8,3.2,4,1.7,6,1.1  c4.7-1.4,3.4,3.4,5.2,4.8c0,2.3,0,4.7,0,7c-2.7,0.8-5.3,1.6-7.7,2.4c-1.9,4.5-1.6,7.8,3.2,10c1,0.4,1.7,3.2,1.2,4.5  c-2.6,8.1-3.7,8.4-10.7,4.2c-0.2-0.1-0.6-0.1-2.4-0.2c-0.7,2.2-2.7,5.2-1.9,7.1c2.1,5.3,0.4,7.7-4.6,9c-0.8,0.2-1.5,0.7-2.2,1.1  c-0.7,0-1.3,0-2,0c-0.7-2-1.2-4.2-2.3-5.9c-0.8-1.2-2.5-2.5-3.8-2.5c-1.3,0-3.1,1.2-3.8,2.5c-1.1,1.8-1.4,4-2.1,6  C170.7,226,169.7,226,168.7,226z M167.5,187.7c-0.2,6.7,4,12.1,9.7,12.3c5.5,0.2,10.2-4.8,10.5-11.1c0.2-6.6-4.1-12.1-9.8-12.2  C172.2,176.5,167.7,181.2,167.5,187.7z"/>
                                    <path class="st6" d="M88.9,155.1c-6.3,0-8.9-4.4-7.4-9.9c4.5-16.3,9-32.6,13.6-48.9c2.2-8,4.4-16,6.7-24c1.4-5,4.5-7.2,8.1-6.1  c3.4,1.1,5.3,5.1,4.1,9.5c-6.8,24.6-13.6,49.3-20.7,73.8C92.6,151.9,90,153.8,88.9,155.1z"/>
                                    <path class="st7" d="M58.5,110.7c6.5,3.5,12.6,6.9,18.7,10.1c3.6,1.9,5,4.7,4.5,8.6c-0.7,4.6-4.7,7-8.8,4.9  c-10.6-5.5-21.2-11.1-31.6-17c-5.2-2.9-5.1-10.3,0.1-13.3C51.7,98.1,62.4,92.6,73,87c3.5-1.8,6.1-0.4,7.9,2.8c2.1,3.7,0.9,8-3,10.4  c-3.1,1.9-6.4,3.5-9.7,5.2C65.2,107,62.1,108.7,58.5,110.7z"/>
                                    <path class="st7" d="M137,110.6c-6.7-3.6-12.6-6.7-18.5-9.8c-3.9-2-5.6-5.1-4.7-9.5c0.9-4,4.8-6.3,8.3-4.4  c10.8,5.6,21.6,11.2,32.1,17.2c5.2,3,5,10.3-0.3,13.3c-10.3,5.8-20.8,11.3-31.2,16.8c-3.3,1.8-6.2,0.9-8.1-2.3  c-2.2-3.6-1.2-8.3,2.5-10.5c4.4-2.7,9.1-4.9,13.6-7.4C132.6,113,134.5,112,137,110.6z"/>
                                    </svg>
                                </span>
                                <span class="name">Website App</span>
                            </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 common-item-service">
                            <div class="item-service">
                                <a href="" class="link-item-service">
                                <span class="img mobile-app">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 163.9 302" style="enable-background:new 0 0 163.9 302;" xml:space="preserve">
                                    <path class="st1" d="M156.9,152.2c0,42.7,0,85.3,0,128c0,7.2-6.5,13.9-13.7,13.9c-41.5,0-83,0-124.5,0c-6.2,0-12.8-6.6-12.8-12.8  c0-86.2,0-172.3,0-258.5c0-6.3,6.6-12.7,13-12.7c41.7,0,83.3,0,125,0c6.7,0,13,6.3,13,13.2C156.9,66.2,156.9,109.2,156.9,152.2z   M139.6,224.8c0-59.1,0-117.8,0-176.4c-39.1,0-77.8,0-116.4,0c0,59,0,117.6,0,176.4C62,224.8,100.6,224.8,139.6,224.8z M70.9,260  c0,4.3,6.3,11,10.5,11c4.1,0,10.2-6.6,10.6-10.9c0.7-7.1-6.9-6.4-9.3-10.4c-0.2-0.3-0.8-0.6-1.2-0.6C78.1,248.9,70.9,256.4,70.9,260  z M109.8,26c-1.7,0-3.3,0-4.9,0c-8.4,0.3-16.8,0.8-25.2,0.9c-6.9,0-13.8-0.7-20.7-0.8c-1.5,0-2.9,1.4-4.4,2.2  c0.2,0.6,0.4,1.1,0.6,1.7c2.9,0.3,5.8,0.9,8.6,1c12.7,0.1,25.3-0.1,38,0.1C105.5,31.1,108.4,30.6,109.8,26z"/>
                                    </svg>
                                </span>
                                <span class="name">Mobile App</span>
                            </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 common-item-service">
                            <div class="item-service">
                                <a href="" class="link-item-service">
                                <span class="img soft-ware">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 214 228" style="enable-background:new 0 0 214 228;" xml:space="preserve">
                                        <path class="st0" d="M74.6,1.7c46.7,0,93.3,0,140,0c0,75.7,0,151.3,0,227c-47.7,0-95.3,0-143,0c1.6-0.7,3.4-1,4.7-2.1  c4.5-3.7,9.8-6.9,12.9-11.5c8.1-12.2,5.3-29.1-5.7-38.3c-1.5-1.3-2.6-3.8-2.7-5.8c-0.5-8,3-14,10.4-17.1  c12.6-5.2,25.4-9.9,37.9-15.3c12.7-5.4,22.7-14.2,29.5-26.3c6.1-10.9,9.2-22.6,9-35.2c0-1.4,0.6-3.6,1.6-4.2  c13.1-8.4,14.8-31,6.1-42.1c-5.9-7.5-13.3-11.4-22.3-10.9c-11.1,0.6-19.5,6.7-23.4,17.4c-4.6,12.8-2.5,24.4,7.9,34  c1.4,1.3,2.9,3.5,2.9,5.3c0.1,15.2-5.9,27.4-19.9,33.9c-12.4,5.8-25.6,10.2-38.7,15.3c-0.4-3-1.2-5.7-1.2-8.5  c-0.1-19.5-0.2-39,0.1-58.5c0-2.3,1.4-5.2,3.1-6.6c6.4-5.5,9.3-12.4,9.7-20.5C94.3,17.4,87.5,7.6,74.6,1.7z"/>
                                        <path class="st1" d="M74.6,1.7c12.9,5.9,19.6,15.7,18.9,30.1c-0.4,8.1-3.3,15-9.7,20.5c-1.7,1.5-3.1,4.4-3.1,6.6  c-0.2,19.5-0.2,39-0.1,58.5c0,2.7,0.7,5.4,1.2,8.5c13.2-5.1,26.3-9.5,38.7-15.3c14-6.5,20-18.7,19.9-33.9c0-1.8-1.5-4-2.9-5.3  c-10.4-9.6-12.5-21.2-7.9-34c3.9-10.7,12.2-16.7,23.4-17.4c9-0.5,16.5,3.4,22.3,10.9c8.7,11.1,7,33.8-6.1,42.1  c-1,0.7-1.6,2.8-1.6,4.2c0.1,12.6-2.9,24.3-9,35.2c-6.8,12.1-16.8,20.9-29.5,26.3c-12.6,5.3-25.4,10-37.9,15.3  C83.7,157,80.3,163,80.7,171c0.1,2,1.2,4.6,2.7,5.8c11,9.1,13.8,26.1,5.7,38.3c-3.1,4.7-8.4,7.8-12.9,11.5c-1.3,1-3.1,1.4-4.7,2.1  c-3,0-6,0-9,0c-6.3-2.8-12.5-5.4-16.9-11.3c-8.6-11.5-6.6-32.2,4.8-40.9c2.5-1.9,3.2-3.6,3.1-6.4c-0.1-35.3-0.2-70.5,0.1-105.8  c0-5.7-0.2-10.7-5.7-13.8c-1-0.5-1.7-1.6-2.3-2.6C37.2,35.1,38,15.3,53.1,4.8c0.8-0.6,1-2.1,1.5-3.1c0.7,0,1.3,0,2,0  C56.8,2,57,2.3,57.2,2.6c0.5-0.3,1-0.6,1.5-0.9C64,1.7,69.3,1.7,74.6,1.7z M154.7,35.6c-0.4,0-0.8,0-1.2,0c-6,0.4-11.4,5.3-11.8,11  c-0.5,7.9,3.5,12.5,11.7,14.4c5.3,1.2,10.5-1.5,12.4-7.2c1.7-5,1.6-10-2.4-14.2c-0.3-0.3-0.5-0.5-0.8-0.8  C160,37.8,157.4,36.7,154.7,35.6z M54.6,199.5c0,7.8,4.9,12.6,12.1,13.3c6.3,0.6,13-6.3,12.9-13.3c-0.1-6.9-6.7-14.3-12.7-13.8  C59.9,186.3,54.1,191.4,54.6,199.5z M54.6,29.5c0,8,5.1,14.1,11.9,14.1c6.6,0.1,13.1-6.8,13.1-14c-0.1-6.3-5.6-13.4-13-13.1  C59.7,16.9,54.6,22.2,54.6,29.5z"/>
                                        <path class="st0" d="M54.6,1.7c-0.5,1.1-0.7,2.5-1.5,3.1C38,15.3,37.2,35.1,45.7,47.9c0.6,1,1.4,2,2.3,2.6c5.6,3.1,5.8,8.1,5.7,13.8  c-0.2,35.3-0.1,70.5-0.1,105.8c0,2.8-0.6,4.5-3.1,6.4c-11.5,8.7-13.5,29.4-4.8,40.9c4.4,5.9,10.7,8.5,16.9,11.3c-20.3,0-40.6,0-61,0  c0-75.7,0-151.3,0-227C19.3,1.7,37,1.7,54.6,1.7z"/>
                                        <path class="st0" d="M58.6,1.7c-0.5,0.3-1,0.6-1.5,0.9C57,2.3,56.8,2,56.6,1.7C57.3,1.7,58,1.7,58.6,1.7z"/>
                                        <path class="st0" d="M54.6,199.5c-0.5-8.1,5.3-13.3,12.3-13.8c6-0.5,12.6,6.9,12.7,13.8c0.1,6.9-6.6,13.9-12.9,13.3  C59.6,212.1,54.6,207.3,54.6,199.5z"/>
                                        <path class="st0" d="M54.6,29.5c0-7.3,5.1-12.6,11.9-12.9c7.5-0.3,13,6.8,13,13.1c0.1,7.1-6.5,14-13.1,14  C59.7,43.6,54.6,37.5,54.6,29.5z"/>
                                        <path class="st0" d="M163.5,39.6c4,4.2,4.1,9.2,2.4,14.2c-2,5.7-7.2,8.5-12.4,7.2c-8.2-1.9-12.2-6.4-11.7-14.4  c0.4-5.7,5.8-10.6,11.8-11c0.4,0,0.8,0,1.2,0c2.6,1.1,5.3,2.1,7.9,3.2C162.9,39.1,163.2,39.4,163.5,39.6z"/>
                                        <path class="st0" d="M154.7,35.6c-0.4,0-0.8,0-1.2,0C153.9,35.6,154.3,35.6,154.7,35.6z"/>
                                        <path class="st0" d="M163.5,39.6c-0.3-0.3-0.5-0.5-0.8-0.8C162.9,39.1,163.2,39.4,163.5,39.6z"/>
                                        </svg>
                                </span>
                                <span class="name">Soft Ware</span>
                            </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 common-item-service">
                            <div class="item-service">
                                <a href="" class="link-item-service">
                                <span class="img graphic-design">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 288.4 309.2" style="enable-background:new 0 0 288.4 309.2;" xml:space="preserve">
                                                <path class="st1" d="M289.4,18.1c0,5.9,0,11.8,0,17.7c-7.5,6.8-15.1,13.4-22.4,20.4c-17.6,16.9-35.1,33.9-52.4,51.2              c-2.3,2.4-4.1,6.5-4.1,9.8c-0.2,64.6-0.2,129.3-0.2,193.9c-70,0-140,0-209.9,0c0-89.7,0-179.5-0.1-269.2c0-2.5-0.9-5-1.3-7.5              c0-3.6,0-7.3,0-10.9c0.7-3.5,1.4-7,2.1-10.4c69.7,0,139.3,0,209.4,0c0,11.3,0,22,0,34C224.3,33.5,236.9,20.5,250,8              c3.1-3,7.7-5.4,12-6c8.8-1.2,15,4.3,20.6,10.4C284.5,14.5,287.1,16.2,289.4,18.1z M139.3,144.7c0,0,0.2,0.2,0.2,0.2              c-0.6-3-2-6.1-1.5-8.9c1.4-7.6,3.5-15.1,5.7-22.5c0.6-2,2.2-3.8,3.7-5.3c10.7-10.5,21.6-21,32.3-31.5c1.4-1.3,3.2-3.2,3.2-4.8              c0.3-10.1,0.1-20.2,0.1-30.2c-27.7,0-54.4,0-81.4,0c0,17.7,0,35,0,53c9.1,0,17.9,0,27,0c-0.3,2.6-0.4,4.5-0.7,6.8              c-17.2,0-33.9,0-50.9,0c0,61,0,121.5,0,182.1c10.9,0,21.4,0,32.7,0c0-4.2,0-7.9,0-11.5c4.2,0,7.8,0,11.7,0c0.2,4,0.4,7.7,0.5,11.5              c20.6,0,40.6,0,60.6,0c0-32.8,0-65.1,0-97.5c-2.7-0.2-4.9-0.4-7.3-0.6c0-3.6,0-6.8,0-10.3c2.7-0.2,5.1-0.4,7.5-0.6              c0-12.3,0-24,0-36.4c-5.5,3.9-9.4,9.5-16.6,9.2c-4-0.2-8,0.5-12,1.2C148.6,149.4,143.2,150,139.3,144.7z M69.4,214.1              c0-37.9,0-75.2,0-112.3c-14.2,0-27.9,0-41.4,0c0,37.7,0,74.9,0,112.3C41.9,214.1,55.4,214.1,69.4,214.1z M28.1,220.1              c0,21.5,0,42.5,0,63.2c14.2,0,27.9,0,41.4,0c0-21.3,0-42.2,0-63.2C55.6,220.1,42.1,220.1,28.1,220.1z M149.9,116.9              c-1.9,6.6-4,12.2-4.8,18c-0.3,2.2,2.4,6.9,3.7,6.9c6.7,0,13.4-1.2,20.7-2C164.9,129.6,158.8,122.4,149.9,116.9z M34.1,94.1              c0-17.5,0-34.8,0-52.5c-2.1,0-4,0-6.2,0c0,17.5,0,34.8,0,52.5C30.1,94.1,31.9,94.1,34.1,94.1z M46.7,42.2c-0.6-0.5-1.1-1.1-1.7-1.6              c-1.3,1.2-3.6,2.3-3.6,3.5c-0.2,16.7-0.2,33.3-0.2,50c0.7,0.4,1.4,0.7,2.1,1.1c1.1-1.4,3.2-2.8,3.2-4.2              C46.8,74.7,46.7,58.4,46.7,42.2z M64.4,93.4c0.7,0.6,1.3,1.1,2,1.7c1.2-1.4,3.3-2.7,3.3-4.1c0.2-16.4,0.2-32.9,0.2-49.3              c-0.7-0.4-1.4-0.7-2.2-1.1c-1.1,1.6-3.1,3.1-3.1,4.7C64.3,61.4,64.4,77.4,64.4,93.4z M82.1,42.2c-0.6-0.5-1.1-1.1-1.7-1.6              c-1.2,1.2-3.6,2.3-3.6,3.5c-0.2,16.7-0.2,33.3-0.2,50c0.7,0.4,1.4,0.7,2.1,1.1c1.1-1.4,3.2-2.8,3.2-4.2              C82.2,74.7,82.1,58.4,82.1,42.2z M92.4,95c0.7-0.6,1.4-1.1,2.1-1.7c0-16-0.1-32.1,0-48.1c0-4.6-2-4.6-5.5-3.1              c0,16.3-0.1,32.3,0.1,48.3C89.1,92,91.2,93.5,92.4,95z M55.2,40.9c-0.6,0.2-1.1,0.5-1.7,0.7c0,16.7,0,33.3,0.1,50              c0,1.1,1.5,2.2,2.3,3.2c0.6-0.2,1.1-0.5,1.7-0.7c0-16.7,0-33.3-0.1-50C57.5,43,56,42,55.2,40.9z"/>
                                                <path class="st1" d="M109.8,175.2c6.1,0,12,0,18.3,0c0,3.2,0,6.5,0,10.2c-1.7,0.2-3.6,0.5-5.9,0.8c-0.2,1.9-0.5,3.8-0.7,6.1              c-3.8,0-7.5,0-11.6,0C109.8,186.6,109.8,181.3,109.8,175.2z"/>
                                                <path class="st1" d="M121.4,223.7c-4,0-7.5,0-11.5,0c0-5.2,0-10.3,0-15.7c3.8,0,7.5,0,11.5,0C121.4,213.1,121.4,218,121.4,223.7z"/>
                                                <path class="st1" d="M121.2,256.4c-4.1,0-7.6,0-11.5,0c0-5.2,0-10.1,0-15.5c3.6,0,7.3,0,11.5,0C121.2,245.7,121.2,250.8,121.2,256.4              z"/>
                                                <path class="st1" d="M143.6,185.3c0-3.5,0-6.4,0-10.4c2.7,0,5.3,0,7.9,0c2.5,0,4.9,0,7.9,0c0,3.6,0,6.8,0,10.4              C154.2,185.3,148.9,185.3,143.6,185.3z"/>
                                                <path class="st1" d="M139.3,144.7c1.7,6.1-0.9,9-8.5,9.5c-1.1-6.5,1.3-9,8.7-9.3C139.5,144.9,139.3,144.7,139.3,144.7z"/>
                                                </svg>
                                </span>
                                <span class="name">Graphic Design</span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="projects" class="item-homepage">
            <div class="projects">
                <h2><?php the_field('title_projects'); ?></h2>
                <div class="inner">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="item-project">
                                <a href="" class="link-item-project">
                    <img src="<?php echo get_template_directory_uri()?>/img/websimpleone.jpg" alt="">
                    <span class="bg-opacity">web Simple one</span>
                  </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="item-project">
                                <a href="" class="link-item-project">
                    <img src="<?php echo get_template_directory_uri()?>/img/appsimpleone.jpg" alt="">
                    <span class="bg-opacity">app Simple one</span>
                  </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="item-project">
                                <a href="" class="link-item-project">
                    <img src="<?php echo get_template_directory_uri()?>/img/appwedding.jpg" alt="">
                    <span class="bg-opacity">app wedding</span>
                  </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="item-project">
                                <a href="" class="link-item-project">
                    <img src="<?php echo get_template_directory_uri()?>/img/readit4me.jpg" alt="">
                    <span class="bg-opacity">read it 4 me</span>
                  </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="item-project">
                                <a href="" class="link-item-project">
                    <img src="<?php echo get_template_directory_uri()?>/img/appmobile.jpg" alt="">
                    <span class="bg-opacity">app mobile</span>
                  </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="responsive-customer" class="item-homepage">
            <div class="responsive-customer">
                <h2><?php the_field('title_responsive_customer'); ?></h2>
                <div class="inner">
                    <?php
                    $infor = get_field('infor_customer');  
                    if( $infor ): ?>
                        <div class="avata">
                            <?php 
                        $image =  $infor['avata'];
                        if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid" />
                            <?php endif; ?>
                        </div>
                        <div class="profile">
                            <h6 class="title-profile">
                        <span class="name">
                            <strong><?php echo $infor['name']; ?></strong>
                        </span>
                        <span class="position">
                            <?php echo $infor['position']; ?>
                        </span>
                    </h6>
                            <div class="description">
                                <p>
                                    <?php echo $infor['description']; ?>
                                </p>
                            </div>
                        </div>
                        <?php endif; ?>
                </div>
            </div>
        </section>
        <section id="our-clients" class="item-homepage">
            <div class="our-clients">
                <h2><?php the_field('title_our_clients'); ?></h2>
                <div class="inner">
                    <div class="slider">
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/img/logo1.png" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/img/logo2.png" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/img/logo3.png" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/img/logo4.png" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/img/logo5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="item-homepage">
            <div class="contact">
                <h2><?php the_field('title_contact'); ?></h2>
                <div class="inner">
                    <div class="row row-contact">
                        <div class="col-lg-6">
                            <div class="contact-cont">
                                <!--  <?php
                            $contact = get_field('contact');  
                            if( $contact ): ?>
                                <span><?php echo $contact['company_name'] ?></span><br>
                                <span><?php echo $contact['address'] ?></span><br>
                                <span><a href="tel:<?php echo $contact['phone_number'] ?>"><?php echo $contact['phone_number'] ?></a></span><br>
                                <span><a href="mailto:<?php echo $contact['email'] ?>"><?php echo $contact['email'] ?></a></span><br>
                                <span><a href="mailto:<?php echo $contact['mail'] ?>"><?php echo $contact['mail'] ?></a></span>
                        <?php endif; ?> -->
                                <p>
                                    <span class="icon-contact"><i class="fa fa-home"></i></span>
                                    <span>SFR Softwere company</span>
                                </p>
                                <p>
                                    <span class="icon-contact"><i class="fa fa-home"></i></span>
                                    <span>109th Hoang Sy Khai – Son Tra – Danang Vietnam</span>
                                </p>
                                <p>
                                    <span class="icon-contact"><i class="fa fa-home"></i></span>
                                    <span><a href="tel:+84 988 858 049">+84 988 858 049</a></span>
                                </p>
                                <p>
                                    <span class="icon-contact"><i class="fa fa-home"></i></span>
                                    <span><a href="mailto:sale@sfr-creative.com">sale@sfr-creative.com</a></span>
                                </p>
                                <p>
                                    <span class="icon-contact"><i class="fa fa-home"></i></span>
                                    <span><a href="mailto:sfr-creative.com">sfr-creative.com</a></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="map">
                                <?php the_field('map'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php get_footer(); ?>