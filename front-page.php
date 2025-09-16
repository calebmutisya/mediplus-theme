<?php
/* Template Name: Front Page */
get_header(); ?>

<main class="site-main">
    <div>

        <!-- <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content(); 
            endwhile;
        endif;
        ?> -->


        <!-- Hero -->
        <div style="background-image: url('<?php echo esc_url( wp_get_attachment_url(16) ); ?>'); background-size: cover;
            background-repeat: no-repeat; 
            background-position: center;  
            background-attachment: fixed;
            min-height: 400px;
            width: 100%;">
            <div class="container flex flex-col md:flex-row">
                <div class="mt-[70px] text-center md:text-start w-[100%] md:w-2/3 xl:w-1/2">
                    <h5 class="text-[14px] mb-5 font-[900] text-[#004861]">WELCOME TO OUR CLINIC</h5>
                    <h2 class="text-[40px] lg:text-[68px] xl:text-[72px] font-[900] mb-3 text-[#004861]">TAKE CARE OF YOUR HEALTH</h2>
                    <p class="mb-[25px] text-[16px] lg:text-[18px] font-[300]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, facere.</p>
                    <button class="text-[14px] mt-[15px] mb-[30px] border-[1px] border-[#00a3c8] bg-[#00a3c8] px-[30px] py-[14px] text-1rem text-[#fff] rounded-[6px] cursor-pointer hover:bg-[#2ab9d6] hover:text-[#fff] transition ease-in-out duration-600 "> More About Mediplus </button>
                </div>
                <div class="md:relative w-[100%] md:w-1/2 xl:w-1/2   md:flex md:items-end md:overflow-clip xl:min-h-[640px]">
                    <img 
                    src="<?php echo esc_url( wp_get_attachment_url(17) ); ?>" 
                    alt="Mediplus Doctors"
                    class="md:absolute md:bottom-0 md:left-0  w-fit h-fit"
                    />
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Example static custom sections -->
        <section id="about" class="container flex flex-col md:flex-row md:items-center">
            <div class="md:min-h-[480px] lg:min-h-[540px] md:relative w-[100%] md:w-1/2 xl:w-1/2 md:flex md:items-end lg:overflow-clip xl:min-h-[640px] order-2 md:order-1">
                <img 
                src="<?php echo esc_url( wp_get_attachment_url(18) ); ?>" 
                alt="Mediplus Doctors"
                class="md:absolute md:bottom-0 md:left-[-10px] lg:left-0 w-fit h-fit"
                />
            </div>
            <div class="text-center md:text-start w-[100%] md:w-1/2 order-1 md:order-2 pt-[70px] pb-[35px] md:pt-0 md:pb-0">
                <span class="text-[14px] font-[900] text-[#00a3c8]">WELCOME TO MEDPLUS</span>
                <h3 class="text-[30px] lg:text-[34px] xl:text-[42px] font-[900] mb-[20px] md:mb-[30px] text-[#004861]">Complete Medical Solutions in One Place</h3>
                <p class="mb-[14px] lg:mb-[16px] text-[16px] font-[300]">Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor lacinia cubilia curae integer congue leo metus, eu mollislorem primis in orci integer metus mollis faucibus. An enim nullam tempor sapien gravida donec pretium and ipsum porta justo integer at velna vitae auctor integer congue</p>
                <p class="text-[16px] font-[300]">Randon Pexon, Head of Clinic</p>
            </div>
        </section>

        <section id="services">
            <div class="container py-[70px] text-center">
                <h3 class=" font-[700] text-[42px] mb-[20px] text-[#004861]">Total Health Care Solutions</h3>
                <p class="font-[300] text-[16px] mb-[70px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br/>Quisquam ut cum aperiam, doloribus praesentium a exercitationem sint quaerat delectus</p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 justify-items-center">
                    <div class=" max-w-[260px] py-[40px] px-[20px] mb-[40px] rounded-[6px] border-none shadow-[0px_0px_10px_0px_rgba(0,0,0,0.1)]">
                        <div class="flex justify-center">
                            <image class="w-[64px] h-[64px] rounded-full" src="" alt=""/>
                        </div>
                        <h5 class="mt-[25px] mb-[15px] font-[900] text-[#004861]">MRI</h5>
                        <p class="text-[14px] font-[300]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ut cum aperiam, doloribus praesentium a exercitationem sint quaerat delectus</p>
                    </div>
                    <div class=" max-w-[260px] py-[40px] px-[20px] mb-[40px] rounded-[6px] border-none shadow-[0px_0px_10px_0px_rgba(0,0,0,0.1)]">
                        <div class="flex justify-center">
                            <image class="w-[64px] h-[64px] rounded-full" src="" alt=""/>
                        </div>
                        <h5 class="mt-[25px] mb-[15px] font-[900] text-[#004861]">LABORATORY</h5>
                        <p class="text-[14px] font-[300]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ut cum aperiam, doloribus praesentium a exercitationem sint quaerat delectus</p>
                    </div>
                    <div class=" max-w-[260px] py-[40px] px-[20px] mb-[40px] rounded-[6px] border-none shadow-[0px_0px_10px_0px_rgba(0,0,0,0.1)]">
                        <div class="flex justify-center">
                            <image class="w-[64px] h-[64px] rounded-full" src="" alt=""/>
                        </div>
                        <h5 class="mt-[25px] mb-[15px] font-[900] text-[#004861]">EMERGENCY HELP</h5>
                        <p class="text-[14px] font-[300]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ut cum aperiam, doloribus praesentium a exercitationem sint quaerat delectus</p>
                    </div>
                    <div class=" max-w-[260px] py-[40px] px-[20px] mb-[40px] rounded-[6px] border-none shadow-[0px_0px_10px_0px_rgba(0,0,0,0.1)]">
                        <div class="flex justify-center">
                            <image class="w-[64px] h-[64px] rounded-full" src="" alt=""/>
                        </div>
                        <h5 class="mt-[25px] mb-[15px] font-[900] text-[#004861]">PEDIATRICS</h5>
                        <p class="text-[14px] font-[300]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ut cum aperiam, doloribus praesentium a exercitationem sint quaerat delectus</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
