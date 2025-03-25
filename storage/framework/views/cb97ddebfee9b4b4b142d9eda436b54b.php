<?php if (isset($component)) { $__componentOriginal2a2e454b2e62574a80c8110e5f128b60 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2a2e454b2e62574a80c8110e5f128b60 = $attributes; } ?>
<?php $component = App\View\Components\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Header::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Online Market']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2a2e454b2e62574a80c8110e5f128b60)): ?>
<?php $attributes = $__attributesOriginal2a2e454b2e62574a80c8110e5f128b60; ?>
<?php unset($__attributesOriginal2a2e454b2e62574a80c8110e5f128b60); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a2e454b2e62574a80c8110e5f128b60)): ?>
<?php $component = $__componentOriginal2a2e454b2e62574a80c8110e5f128b60; ?>
<?php unset($__componentOriginal2a2e454b2e62574a80c8110e5f128b60); ?>
<?php endif; ?>


<!-- Loader -->
<div
    class="bb-loader min-w-full w-full h-screen fixed top-[0] left-[0] flex items-center justify-center bg-[#fff] z-[45]">
    <img src="assets/img/logo/loader.png" alt="loader" class="absolute">
    <span class="loader w-[60px] h-[60px] relative"></span>
</div>

<!-- Header -->
<?php if (isset($component)) { $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e = $attributes; } ?>
<?php $component = App\View\Components\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Navbar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['parentCategories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($parentCategories),'productsMenu' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($productsMenu)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $attributes = $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $component = $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
<!-- Hero -->
<section class="section-hero mb-[50px] max-[1199px]:mb-[35px] py-[50px] relative bg-[#f8f8fb] overflow-hidden">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full">
                <div class="hero-slider swiper-container">
                    <div class="swiper-wrapper">



                        <?php $__currentLoopData = $topBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $title = trim(preg_replace('/\s+/', ' ', $banner->title));

                                $words = explode(" ", $title);
                                if (isset($words[1])) {
                                    $words[1] = '<span class="relative text-[#6c7fd8]">' . $words[1] . '</span>';
                                }
                                $title = implode(" ", $words);
                                ?>
                            <div class="swiper-slide slide-1">
                                <div class="flex flex-wrap w-full mb-[-24px]">
                                    <div
                                        class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-1 order-2 mb-[24px]">
                                        <div
                                            class="hero-contact h-full flex flex-col items-start justify-center max-[991px]:items-center">
                                            <p class="mb-[20px] font-Poppins text-[18px] text-[#777] font-light leading-[28px] tracking-[0.03rem] max-[1199px]:mb-[10px] max-[1199px]:text-[16px]">
                                                <?php echo e($banner->description); ?></p>
                                            <h1 class="mb-[20px] font-quicksand text-[50px] text-[#3d4750] font-bold tracking-[0.03rem] leading-[1.2] max-[1199px]:mb-[10px] max-[1199px]:text-[38px] max-[991px]:text-center max-[991px]:text-[45px] max-[767px]:text-[40px] max-[575px]:text-[35px] max-[420px]:text-[30px] max-[360px]:text-[28px]"><?php echo $title; ?></h1>
                                            <a href="shop-left-sidebar-col-3.html"
                                               class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[8px] px-[20px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] max-[1199px]:py-[3px] max-[1199px]:px-[15px] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">Shop
                                                Now</a>
                                        </div>
                                    </div>
                                    <div
                                        class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-2 order-1 mb-[24px]">
                                        <div
                                            class="hero-image pr-[50px] relative max-[991px]:px-[50px] max-[575px]:px-[30px] flex justify-center max-[420px]:p-[0]">
                                            <img src="<?php echo e(Storage::url($banner->image)); ?>" alt="hero"
                                                 class="w-full pb-[50px] opacity-[1] max-[1199px]:pr-[30px] max-[991px]:pr-[0] max-[575px]:pb-[30px] max-[420px]:pb-[15px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"
                                                 class="animate-shape w-[120%] absolute top-[-50px] right-[-50px] z-[-1] max-[1399px]:right-[-30px] max-[1199px]:w-[125%] max-[991px]:w-[100%] max-[991px]:top-[0] max-[575px]:right-[0] max-[420px]:w-[110%] max-[420px]:right-[-30px]">
                                                <linearGradient id="shape_1" x1="100%" x2="0%" y1="100%"
                                                                y2="0%"></linearGradient>
                                                <path d="">
                                                    <animate repeatCount="indefinite" attributeName="d" dur="15s"
                                                             values=""/>
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="swiper-pagination swiper-pagination-white"></div>
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bb-scroll-Page absolute right-[-15px] bottom-[75px] rotate-[270deg] max-[575px]:hidden">
            <span class="scroll-bar transition-all duration-[0.3s] ease-in-out relative max-[1250px]:hidden">
                <a href="javascript:void(0)"
                   class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[16px] font-medium leading-[28px] tracking-[0.03rem] text-[#686e7d]">Scroll Page</a>
            </span>
    </div>
</section>

<!-- Category -->

<?php if($midBanner): ?>
        <?php
        $title=trim(preg_replace('/\s+/', ' ', $midBanner->title));
        $words=explode(' ', $title);
        ?>
<?php endif; ?>

<section class="section-category overflow-hidden py-[50px] max-[1199px]:py-[35px]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full mb-[-24px]">
            <div class="min-[992px]:w-[41.66%] w-full px-[12px] mb-[24px]">
                <div class="bb-category-img relative max-[991px]:hidden">
                    <img src="<?php echo e(Storage::url($midBanner->image)); ?>" alt="category" class="w-full rounded-[30px]">
                    <div
                        class="bb-offers py-[5px] px-[15px] absolute top-[20px] right-[20px] bg-[#000] opacity-[0.8] rounded-[15px]">
                        <span class="text-[14px] font-normal text-[#fff]"><?php echo e($midBanner->description); ?></span>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[58.33%] w-full px-[12px] mb-[24px]">
                <div class="bb-category-contact max-[991px]:mt-[-24px]">
                    <div class="category-title mb-[30px] max-[991px]:hidden" data-aos="fade-up" data-aos-duration="1000"
                         data-aos-delay="600">
                        <h2 class="font-quicksand text-[124px] text-[#fff] opacity-[0.15] font-bold leading-[1.2] tracking-[0.03rem] max-[1399px]:text-[95px] max-[1199px]:text-[70px] max-[767px]:text-[42px]">
                            <?php echo e($midBanner->title); ?></h2>
                    </div>
                    <div
                        class="bb-category-block owl-carousel ml-[-150px] w-[calc(100%+150px)] pt-[30px] pl-[30px] bg-[#fff] rounded-tl-[30px] relative max-[991px]:ml-[0] max-[991px]:w-full max-[991px]:p-[0]">
                        <?php $__currentLoopData = $parentCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div
                                class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-1 bg-[#fef1f1]"
                                data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200">

                                <div class="category-image mb-[12px]">
                                    <img src="<?php echo e(isset($category->images[0]) ? \Illuminate\Support\Facades\Storage::url($category->images[0]->path) : asset('default-image.jpg')); ?>"
                                         alt="category"
                                         class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                                </div>

                                <div class="category-sub-contact">
                                    <h5 class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]">
                                        <a href="shop-left-sidebar-col-3.html"
                                           class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">
                                            <?php echo e($category->name); ?>

                                        </a>
                                    </h5>
                                    <p class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">
                                        <?php echo e($category->productCount()); ?> product
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Day of the deal -->
<section class="section-deal overflow-hidden py-[50px] max-[1199px]:py-[35px]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div
                    class="section-title bb-deal mb-[20px] pb-[20px] z-[5] relative flex justify-between max-[991px]:pb-[0] max-[991px]:flex-col max-[991px]:justify-center max-[991px]:text-center"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="section-detail max-[991px]:mb-[12px]">
                        <h2 class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">
                            Day of the <span class="text-[#6c7fd8]">deal</span></h2>
                        <p class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">
                            Don't wait. The time will never be just right.</p>
                    </div>
                    <div id="dealend" class="dealend-timer"></div>
                </div>
            </div>
            <div class="w-full px-[12px]">
                <div class="bb-deal-slider m-[-12px]">
                    <div class="bb-deal-block owl-carousel">
                        <div class="bb-deal-card p-[12px]" data-aos="fade-up" data-aos-duration="1000"
                             data-aos-delay="200">
                            <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                <div
                                    class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <span
                                            class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                            <span class="text-[14px] text-[#777] font-medium uppercase">New</span>
                                        </span>
                                    <a href="javascript:void(0)">
                                        <div
                                            class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                            <img class="main-img transition-all duration-[0.3s] ease-in-out w-full"
                                                 src="assets/img/product/1.jpg" alt="product-1">
                                            <img
                                                class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                                src="assets/img/product/back-1.jpg" alt="product-1">
                                        </div>
                                    </a>
                                    <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Wishlist"
                                               class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Quick View"
                                               class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="compare.html" title="Compare"
                                               class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Add To Cart"
                                               class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bb-pro-contact p-[20px]">
                                    <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                        <a href="shop-left-sidebar-col-3.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Chocos</a>
                                        <span class="bb-pro-rating">
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                            </span>
                                    </div>
                                    <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                        <a href="product-left-sidebar.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Mixed
                                            Fruits Chocolates Pack</a>
                                    </h4>
                                    <div class="bb-price flex flex-wrap justify-between">
                                        <div class="inner-price mx-[-3px]">
                                            <span
                                                class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$25</span>
                                            <span
                                                class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$30</span>
                                        </div>
                                        <span class="last-items text-[14px] text-[#686e7d]">1 Pack</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bb-deal-card p-[12px]" data-aos="fade-up" data-aos-duration="1000"
                             data-aos-delay="400">
                            <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                <div
                                    class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <span
                                            class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                            <span class="text-[14px] text-[#777] font-medium uppercase">Hot</span>
                                        </span>
                                    <a href="javascript:void(0)">
                                        <div
                                            class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                            <img class="main-img transition-all duration-[0.3s] ease-in-out w-full"
                                                 src="assets/img/product/2.jpg" alt="product-2">
                                            <img
                                                class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                                src="assets/img/product/back-2.jpg"
                                                alt="product-2">
                                        </div>
                                    </a>
                                    <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Wishlist"
                                               class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Quick View"
                                               class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="compare.html" title="Compare"
                                               class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Add To Cart"
                                               class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bb-pro-contact p-[20px]">
                                    <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                        <a href="shop-left-sidebar-col-3.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Juice</a>
                                        <span class="bb-pro-rating">
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                            </span>
                                    </div>
                                    <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                        <a href="product-left-sidebar.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Organic
                                            Apple Juice Pack</a>
                                    </h4>
                                    <div class="bb-price flex flex-wrap justify-between">
                                        <div class="inner-price mx-[-3px]">
                                            <span
                                                class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$15</span>
                                            <span class="item-left px-[3px] text-[14px] text-[#6c7fd8]">3 Left</span>
                                        </div>
                                        <span class="last-items text-[14px] text-[#686e7d]">100 ml</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bb-deal-card p-[12px]" data-aos="fade-up" data-aos-duration="1000"
                             data-aos-delay="600">
                            <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                <div
                                    class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                    <a href="javascript:void(0)">
                                        <div
                                            class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                            <img class="main-img transition-all duration-[0.3s] ease-in-out w-full"
                                                 src="assets/img/product/3.jpg" alt="product-3">
                                            <img
                                                class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                                src="assets/img/product/back-3.jpg"
                                                alt="product-3">
                                        </div>
                                    </a>
                                    <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Wishlist"
                                               class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Quick View"
                                               class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="compare.html" title="Compare"
                                               class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Add To Cart"
                                               class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bb-pro-contact p-[20px]">
                                    <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                        <a href="shop-left-sidebar-col-3.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Juice</a>
                                        <span class="bb-pro-rating">
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                            </span>
                                    </div>
                                    <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                        <a href="product-left-sidebar.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Mixed
                                            Almond nuts juice Pack</a>
                                    </h4>
                                    <div class="bb-price flex flex-wrap justify-between">
                                        <div class="inner-price mx-[-3px]">
                                            <span
                                                class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$32</span>
                                            <span
                                                class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$39</span>
                                        </div>
                                        <span class="last-items text-[14px] text-[#686e7d]">250 g</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bb-deal-card p-[12px]" data-aos="fade-up" data-aos-duration="1000"
                             data-aos-delay="800">
                            <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                <div
                                    class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <span
                                            class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                            <span class="text-[14px] text-[#777] font-medium uppercase">Sale</span>
                                        </span>
                                    <a href="javascript:void(0)">
                                        <div
                                            class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                            <img class="main-img transition-all duration-[0.3s] ease-in-out w-full"
                                                 src="assets/img/product/4.jpg" alt="product-4">
                                            <img
                                                class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                                src="assets/img/product/back-4.jpg"
                                                alt="product-4">
                                        </div>
                                    </a>
                                    <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Wishlist"
                                               class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Quick View"
                                               class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="compare.html" title="Compare"
                                               class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Add To Cart"
                                               class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bb-pro-contact p-[20px]">
                                    <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                        <a href="shop-left-sidebar-col-3.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Fruits</a>
                                        <span class="bb-pro-rating">
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
        <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['parentCategories']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['parentCategories']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
                                    </span>
                                    </div>
                                    <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                        <a href="product-left-sidebar.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Fresh
                                            Mango Slice Juice</a>
                                    </h4>
                                    <div class="bb-price flex flex-wrap justify-between">
                                        <div class="inner-price mx-[-3px]">
                                            <span
                                                class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$25</span>
                                            <span
                                                class="item-left px-[3px] text-[14px] text-[#6c7fd8]">Out Of Stock</span>
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
</section>

<!-- Banner-one -->
<section class="section-banner-one overflow-hidden py-[50px] max-[1199px]:py-[35px]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full mb-[-24px]">

            <?php $__currentLoopData = $oneBottomBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $title = trim(preg_replace('/\s+/', ' ', $banner->title));
                    ?>

            <div class="min-[992px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000"
                 data-aos-delay="400">
                <div class="banner-box p-[30px] rounded-[20px] relative overflow-hidden bg-box-color-one bg-[#fbf2e5]">
                    <div class="inner-banner-box relative z-[1] flex justify-between max-[480px]:flex-col">
                        <div
                            class="side-image px-[12px] flex items-center max-[480px]:p-[0] max-[480px]:mb-[12px] max-[480px]:justify-center">
                            <img src="<?php echo e(Storage::url($banner->image)); ?>" alt="banners"
                                 class="max-w-max w-[280px] h-[280px] max-[1399px]:w-[230px] max-[1399px]:h-[230px] max-[1199px]:w-[140px] max-[1199px]:h-[140px] max-[991px]:w-[280px] max-[991px]:h-[280px] max-[767px]:h-[200px] max-[767px]:w-[200px] max-[575px]:w-full max-[575px]:h-[auto] max-[480px]:w-[calc(100%-70px)]">
                        </div>
                        <div
                            class="inner-contact max-w-[250px] px-[12px] flex flex-col items-start justify-center max-[480px]:p-[0] max-[480px]:max-w-[100%] max-[480px]:text-center max-[480px]:items-center">
                            <h5 class="font-quicksand mb-[15px] text-[31px] text-[#3d4750] font-bold tracking-[0.03rem] text-[#3d4750] leading-[1.2] max-[991px]:text-[28px] max-[575px]:text-[24px] max-[480px]:mb-[2px] max-[480px]:text-[22px]">
                                <?php echo $title; ?></h5>
                            <p class="font-Poppins text-[16px] font-light leading-[28px] tracking-[0.03rem] text-[#686e7d] mb-[15px] max-[480px]:mb-[8px] max-[480px]:text-[14px]">
                                <?php echo e($banner->description); ?></p>
                            <a href="shop-left-sidebar-col-3.html"
                               class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[5px] px-[15px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- Banner-two -->

<?php if($bottomBanner): ?>
        <?php
        $title = trim(preg_replace('/\s+/', ' ', $bottomBanner->title));
        $words = explode(" ", $title);
        ?>
<section
    class="section-banner-two overflow-hidden my-[50px] max-[1199px]:my-[35px] bg-[url('<?php echo e(asset('storage/' . $bottomBanner->image)); ?>')] min-h-[600px] overflow-hidden bg-no-repeat bg-cover bg-center max-[991px]:max-h-[400px] max-[991px]:min-h-[auto]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div
                class="w-full px-[12px] banner-justify-box-contact w-full h-[600px] flex justify-end items-end max-[991px]:h-[400px]">
                <div
                    class="banner-two-box bg-[#fff] rounded-t-[30px] max-w-[400px] pt-[30px] px-[30px] flex flex-col items-start relative max-[991px]:max-w-[250px] max-[575px]:my-[0] max-[575px]:mx-[auto]">
                    <span class="text-[20px] font-semibold text-[#6c7fd8] leading-[26px] max-[991px]:text-[16px]"><?php echo e($bottomBanner->description); ?></span>
                    <h4 class="font-quicksand mb-[20px] text-[40px] font-bold text-[#3d4750] tracking-[0.03rem] leading-[1.2] max-[991px]:text-[22px]">
                        <?php echo e($bottomBanner->title); ?></h4>
                    <a href="javascript:void(0)"
                       class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[8px] px-[20px] max-[1199px]:py-[3px] max-[1199px]:px-[15px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">Shop
                        Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- New Product tab Area -->
<section class="section-product-tabs overflow-hidden py-[50px] max-[1199px]:py-[35px]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div
                    class="section-title mb-[20px] pb-[20px] z-[5] relative flex justify-between max-[991px]:pb-[0] max-[991px]:flex-col max-[991px]:justify-center max-[991px]:text-center"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="section-detail max-[991px]:mb-[12px]">
                        <h2 class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">
                            New <span class="text-[#6c7fd8]">Arrivals</span></h2>
                        <p class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">
                            Shop online for new arrivals and get free shipping!</p>
                    </div>
                    <div class="bb-pro-tab">
                        <ul class="bb-pro-tab-nav flex flex-wrap mx-[-20px] max-[991px]:justify-center" id="ProductTab">
                            <li class="nav-item relative leading-[28px]">
                                <a class="nav-link px-[20px] font-Poppins text-[16px] text-[#686e7d] font-medium capitalize leading-[28px] tracking-[0.03rem] block"
                                   href="#all">All</a>
                            </li>
                            <li class="nav-item relative leading-[28px] active">
                                <a class="nav-link px-[20px] font-Poppins text-[16px] text-[#686e7d] font-medium capitalize leading-[28px] tracking-[0.03rem] block"
                                   href="#snack">Snack & Spices</a>
                            </li>
                            <li class="nav-item relative leading-[28px]">
                                <a class="nav-link px-[20px] font-Poppins text-[16px] text-[#686e7d] font-medium capitalize leading-[28px] tracking-[0.03rem] block"
                                   href="#fruit">Fruits</a>
                            </li>
                            <li class="nav-item leading-[28px]">
                                <a class="nav-link px-[20px] font-Poppins text-[16px] text-[#686e7d] font-medium capitalize leading-[28px] tracking-[0.03rem] block"
                                   href="#veg">Vegetables</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap w-full mb-[-24px]">
            <div class="w-full">
                <div class="tab-content">
                    <!-- 1st Product tab start -->
                    <div class="tab-product-pane" id="all">
                        <div class="flex flex-wrap w-full">
                            
                            <div
                                class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]"
                                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div
                                    class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div
                                        class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span
                                                class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">New</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div
                                                class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full"
                                                     src="assets/img/new-product/1.jpg"
                                                     alt="product-1">
                                                <img
                                                    class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                                    src="assets/img/new-product/back-1.jpg"
                                                    alt="product-1">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist"
                                                   class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View"
                                                   class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare"
                                                   class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart"
                                                   class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html"
                                               class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Snacks</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html"
                                               class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Ground
                                                Nuts Oil
                                                Pack</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$15</span>
                                                <span
                                                    class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$22</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">500g</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- 2nd Product tab start -->
                    <div class="tab-product-pane" id="snack">
                        <div class="flex flex-wrap w-full">
                            
                            <div
                                class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]"
                                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div
                                    class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div
                                        class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span
                                                class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">New</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div
                                                class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full"
                                                     src="assets/img/new-product/1.jpg"
                                                     alt="product-1">
                                                <img
                                                    class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                                    src="assets/img/new-product/back-1.jpg"
                                                    alt="product-1">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist"
                                                   class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View"
                                                   class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare"
                                                   class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart"
                                                   class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html"
                                               class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Snacks</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html"
                                               class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Ground
                                                Nuts Oil
                                                Pack</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$15</span>
                                                <span
                                                    class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$22</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">500g</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- 3rd Product tab start -->
                    <div class="tab-product-pane" id="fruit">
                        <div class="flex flex-wrap w-full">
                            
                            <div
                                class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]"
                                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div
                                    class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div
                                        class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span
                                                class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">New</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div
                                                class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full"
                                                     src="assets/img/new-product/1.jpg"
                                                     alt="product-1">
                                                <img
                                                    class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                                    src="assets/img/new-product/back-1.jpg"
                                                    alt="product-1">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist"
                                                   class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View"
                                                   class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare"
                                                   class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart"
                                                   class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html"
                                               class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Snacks</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html"
                                               class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Ground
                                                Nuts Oil
                                                Pack</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$15</span>
                                                <span
                                                    class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$22</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">500g</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- 4th Product tab start -->
                    <div class="tab-product-pane" id="veg">
                        <div class="flex flex-wrap w-full">
                            
                            <div
                                class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]"
                                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div
                                    class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div
                                        class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span
                                                class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">New</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div
                                                class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full"
                                                     src="assets/img/new-product/1.jpg"
                                                     alt="product-1">
                                                <img
                                                    class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                                    src="assets/img/new-product/back-1.jpg"
                                                    alt="product-1">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist"
                                                   class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View"
                                                   class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare"
                                                   class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart"
                                                   class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html"
                                               class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Snacks</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html"
                                               class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Ground
                                                Nuts Oil
                                                Pack</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$15</span>
                                                <span
                                                    class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$22</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">500g</span>
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
</section>

<!-- Services -->
<section class="section-services overflow-hidden py-[50px] max-[1199px]:py-[35px]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full mb-[-24px]">
            <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="flip-up"
                 data-aos-duration="1000" data-aos-delay="200">
                <div
                    class="bb-services-box p-[30px] border-[1px] border-solid border-[#eee] rounded-[20px] text-center">
                    <div class="services-img mb-[20px] flex justify-center">
                        <img src="assets/img/services/1.png" alt="services-1" class="w-[50px]">
                    </div>
                    <div class="services-contact">
                        <h4 class="font-quicksand mb-[8px] text-[18px] font-bold text-[#3d4750] leading-[1.2] tracking-[0.03rem]">
                            Free Shipping</h4>
                        <p class="font-Poppins font-light text-[14px] leading-[20px] text-[#686e7d] tracking-[0.03rem]">
                            Free shipping on all Us order or above $200</p>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="flip-up"
                 data-aos-duration="1000" data-aos-delay="400">
                <div
                    class="bb-services-box p-[30px] border-[1px] border-solid border-[#eee] rounded-[20px] text-center">
                    <div class="services-img mb-[20px] flex justify-center">
                        <img src="assets/img/services/2.png" alt="services-2" class="w-[50px]">
                    </div>
                    <div class="services-contact">
                        <h4 class="font-quicksand mb-[8px] text-[18px] font-bold text-[#3d4750] leading-[1.2] tracking-[0.03rem]">
                            24x7 Support</h4>
                        <p class="font-Poppins font-light text-[14px] leading-[20px] text-[#686e7d] tracking-[0.03rem]">
                            Contact us 24 hours a day, 7 days a week</p>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="flip-up"
                 data-aos-duration="1000" data-aos-delay="600">
                <div
                    class="bb-services-box p-[30px] border-[1px] border-solid border-[#eee] rounded-[20px] text-center">
                    <div class="services-img mb-[20px] flex justify-center">
                        <img src="assets/img/services/3.png" alt="services-3" class="w-[50px]">
                    </div>
                    <div class="services-contact">
                        <h4 class="font-quicksand mb-[8px] text-[18px] font-bold text-[#3d4750] leading-[1.2] tracking-[0.03rem]">
                            30 Days Return</h4>
                        <p class="font-Poppins font-light text-[14px] leading-[20px] text-[#686e7d] tracking-[0.03rem]">
                            Simply return it within 30 days for an exchange</p>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="flip-up"
                 data-aos-duration="1000" data-aos-delay="800">
                <div
                    class="bb-services-box p-[30px] border-[1px] border-solid border-[#eee] rounded-[20px] text-center">
                    <div class="services-img mb-[20px] flex justify-center">
                        <img src="assets/img/services/4.png" alt="services-4" class="w-[50px]">
                    </div>
                    <div class="services-contact">
                        <h4 class="font-quicksand mb-[8px] text-[18px] font-bold text-[#3d4750] leading-[1.2] tracking-[0.03rem]">
                            Payment Secure</h4>
                        <p class="font-Poppins font-light text-[14px] leading-[20px] text-[#686e7d] tracking-[0.03rem]">
                            Contact us 24 hours a day, 7 days a week</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Testimonials -->
<section class="section-testimonials overflow-hidden py-[100px] max-[1199px]:py-[70px] max-[991px]:p-[0]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="bb-testimonials relative" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <img src="assets/img/testimonials/img-1.png" alt="testimonials-1"
                         class="testimonials-img-1 z-[-1] h-[70px] w-[70px] absolute top-[0] left-[25px] rounded-[20px] rotate-[-10deg] max-[1399px]:h-[60px] max-[1399px]:w-[60px] max-[1399px]:left-[10px] max-[1199px]:hidden">
                    <img src="assets/img/testimonials/img-2.png" alt="testimonials-2"
                         class="testimonials-img-2 z-[-1] h-[50px] w-[50px] absolute bottom-[0] left-[0] rounded-[15px] rotate-[15deg] blur-[3px] max-[1199px]:hidden">
                    <img src="assets/img/testimonials/img-3.png" alt="testimonials-3"
                         class="testimonials-img-3 z-[-1] h-[60px] w-[60px] absolute top-[-50px] right-[500px] rounded-[20px] rotate-[-30deg] blur-[3px] max-[991px]:hidden">
                    <img src="assets/img/testimonials/img-4.png" alt="testimonials-4"
                         class="testimonials-img-4 z-[-1] h-[60px] w-[60px] absolute top-[50px] right-[250px] rounded-[20px] rotate-[15deg] max-[1399px]:top-[20px] max-[991px]:hidden">
                    <img src="assets/img/testimonials/img-5.png" alt="testimonials-5"
                         class="testimonials-img-5 z-[-1] h-[70px] w-[70px] absolute top-[0] right-[20px] rounded-[20px] blur-[3px] max-[991px]:hidden">
                    <img src="assets/img/testimonials/img-6.png" alt="testimonials-6"
                         class="testimonials-img-6 z-[-1] h-[60px] w-[60px] absolute bottom-[30px] right-[100px] rounded-[20px] rotate-[-25deg] max-[1399px]:h-[50px] max-[1399px]:w-[50px] max-[1399px]:right-[50px] max-[1199px]:right-[0] max-[991px]:hidden">
                    <div
                        class="inner-banner rotate-[270deg] absolute top-[0] z-[-1] left-[150px] bottom-[0] max-[1399px]:left-[110px] max-[1199px]:left-[30px] max-[991px]:hidden">
                        <h4 class="font-quicksand text-[#fff] tracking-[0.03rem] opacity-[0.15] text-[42px] font-bold leading-[1.2] max-[1399px]:text-[38px] max-[1199px]:text-[34px]">
                            Testimonials</h4>
                    </div>
                    <div class="owl-carousel testimonials-slider">
                        <div class="bb-testimonials-inner max-w-[900px] m-[auto] max-[1399px]:max-w-[800px]">
                            <div class="flex flex-wrap mx-[-12px] testimonials-row">
                                <div class="min-[768px]:w-[33.33%] w-full px-[12px] max-[767px]:hidden">
                                    <div
                                        class="testimonials-image relative max-[575px]:mb-[20px] max-[575px]:max-w-[200px]">
                                        <img src="assets/img/testimonials/1.jpg" alt="testimonials"
                                             class="w-full rounded-[30px] block">
                                    </div>
                                </div>
                                <div class="min-[768px]:w-[66.66%] w-full px-[12px]">
                                    <div class="testimonials-contact h-full flex flex-col justify-end">
                                        <div class="user max-[767px]:flex max-[767px]:items-center">
                                            <img src="assets/img/testimonials/1.jpg" alt="testimonials"
                                                 class="w-full hidden rounded-[15px] max-[767px]:max-w-[60px] max-[767px]:mr-[15px] max-[767px]:flex">
                                            <div class="detail">
                                                <h4 class="font-quicksand text-[#3d4750] tracking-[0.03rem] leading-[1.2] mb-[8px] text-[20px] font-bold max-[767px]:mb-[4px] max-[767px]:text-[18px]">
                                                    Isabella Oliver</h4>
                                                <span
                                                    class="font-Poppins font-normal tracking-[0.02rem] text-[14px] text-[#777]">(Manager)</span>
                                            </div>
                                        </div>
                                        <div
                                            class="inner-contact bg-[#fff] mt-[10px] border-[1px] border-solid border-[#eee] p-[20px] rounded-[30px]">
                                            <p class="font-Poppins text-[#686e7d] text-[14px] leading-[25px] tracking-[0.03rem] font-light">
                                                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                                at sint eligendi possimus perspiciatis asperiores reiciendis hic
                                                amet alias aut quaerat maiores blanditiis."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bb-testimonials-inner max-w-[900px] m-[auto] max-[1399px]:max-w-[800px]">
                            <div class="flex flex-wrap mx-[-12px] testimonials-row">
                                <div class="min-[768px]:w-[33.33%] w-full px-[12px] max-[767px]:hidden">
                                    <div
                                        class="testimonials-image relative max-[575px]:mb-[20px] max-[575px]:max-w-[200px]">
                                        <img src="assets/img/testimonials/2.jpg" alt="testimonials"
                                             class="w-full rounded-[30px] block">
                                    </div>
                                </div>
                                <div class="min-[768px]:w-[66.66%] w-full px-[12px]">
                                    <div class="testimonials-contact h-full flex flex-col justify-end">
                                        <div class="user max-[767px]:flex max-[767px]:items-center">
                                            <img src="assets/img/testimonials/2.jpg" alt="testimonials"
                                                 class="w-full hidden rounded-[15px] max-[767px]:max-w-[60px] max-[767px]:mr-[15px] max-[767px]:flex">
                                            <div class="detail">
                                                <h4 class="font-quicksand text-[#3d4750] tracking-[0.03rem] leading-[1.2] mb-[8px] text-[20px] font-bold max-[767px]:mb-[4px] max-[767px]:text-[18px]">
                                                    Nikki Albart</h4>
                                                <span
                                                    class="font-Poppins font-normal tracking-[0.02rem] text-[14px] text-[#777]">(Team Leader)</span>
                                            </div>
                                        </div>
                                        <div
                                            class="inner-contact bg-[#fff] mt-[10px] border-[1px] border-solid border-[#eee] p-[20px] rounded-[30px]">
                                            <p class="font-Poppins text-[#686e7d] text-[14px] leading-[25px] tracking-[0.03rem] font-light">
                                                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                                at sint eligendi possimus perspiciatis asperiores reiciendis hic
                                                amet alias aut quaerat maiores blanditiis."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bb-testimonials-inner max-w-[900px] m-[auto] max-[1399px]:max-w-[800px]">
                            <div class="flex flex-wrap mx-[-12px] testimonials-row">
                                <div class="min-[768px]:w-[33.33%] w-full px-[12px] max-[767px]:hidden">
                                    <div
                                        class="testimonials-image relative max-[575px]:mb-[20px] max-[575px]:max-w-[200px]">
                                        <img src="assets/img/testimonials/3.jpg" alt="testimonials"
                                             class="w-full rounded-[30px] block">
                                    </div>
                                </div>
                                <div class="min-[768px]:w-[66.66%] w-full px-[12px]">
                                    <div class="testimonials-contact h-full flex flex-col justify-end">
                                        <div class="user max-[767px]:flex max-[767px]:items-center">
                                            <img src="assets/img/testimonials/3.jpg" alt="testimonials"
                                                 class="w-full hidden rounded-[15px] max-[767px]:max-w-[60px] max-[767px]:mr-[15px] max-[767px]:flex">
                                            <div class="detail">
                                                <h4 class="font-quicksand text-[#3d4750] tracking-[0.03rem] leading-[1.2] mb-[8px] text-[20px] font-bold max-[767px]:mb-[4px] max-[767px]:text-[18px]">
                                                    Stephen Smith</h4>
                                                <span
                                                    class="font-Poppins font-normal tracking-[0.02rem] text-[14px] text-[#777]">(Co Founder)</span>
                                            </div>
                                        </div>
                                        <div
                                            class="inner-contact bg-[#fff] mt-[10px] border-[1px] border-solid border-[#eee] p-[20px] rounded-[30px]">
                                            <p class="font-Poppins text-[#686e7d] text-[14px] leading-[25px] tracking-[0.03rem] font-light">
                                                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                                at sint eligendi possimus perspiciatis asperiores reiciendis hic
                                                amet alias aut quaerat maiores blanditiis."</p>
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
</section>

<!-- Blog -->
<section class="section-blog overflow-hidden pb-[50px] max-[1199px]:pb-[35px] pt-[100px] max-[1199px]:pt-[70px]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="blog-2-slider owl-carousel">
                    <?php $__currentLoopData = $latestPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="blog-2-card relative overflow-hidden rounded-[30px]" data-aos="fade-up"
                             data-aos-duration="1000" data-aos-delay="800">
                            <div class="blog-img">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($latestPost->image)); ?>" alt="blog-10"
                                     class="transition-all duration-[0.3s] ease-in-out w-full block">
                            </div>
                            <div
                                class="blog-contact transition-all duration-[0.3s] ease-in-out m-[5px] p-[15px] absolute bottom-[0] right-[0] left-[0] bg-[#ffffffe6] rounded-[30px]">
                            <span
                                class="font-Poppins font-normal text-[13px] leading-[26px] tracking-[0.02rem] text-[#686e7d]"><?php echo e($latestPost->updated_at->diffForHumans()); ?> - <?php echo e($latestPost->postCategory->name); ?></span>
                                <h4 class="text-[16px] leading-[1.2]"><a href="blog-detail-left-sidebar.html"
                                                                         class="font-Poppins tracking-[0.03rem] text-[16px] font-medium leading-[1.3] text-[#3d4750]">31
                                        customer stats know in 2020.</a></h4>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Instagram -->
<section class="section-instagram overflow-hidden py-[50px] max-[1199px]:py-[35px] relative">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div
                    class="bb-title m-[auto] py-[15px] px-[30px] bg-[#fff] rounded-[30px] absolute top-[50%] left-[50%] z-[5] max-[991px]:py-[8px] max-[991px]:px-[20px]">
                    <h3 class="font-quicksand m-[0] text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2] text-[28px] max-[991px]:text-[25px]">
                        #Insta</h3>
                </div>
                <div class="bb-instagram-slider owl-carousel">
                    <?php $__currentLoopData = $insPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="instagram-img relative overflow-hidden rounded-[30px]">
                            <a href="javascript:void(0)">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($insPost->image)); ?>" alt="instagram-1" class="w-full rounded-[20px]">
                            </a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<!-- Cart sidebar -->
<?php if (isset($component)) { $__componentOriginal33d23524487d116c73f9d556e77ac108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33d23524487d116c73f9d556e77ac108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cart-sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cart-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33d23524487d116c73f9d556e77ac108)): ?>
<?php $attributes = $__attributesOriginal33d23524487d116c73f9d556e77ac108; ?>
<?php unset($__attributesOriginal33d23524487d116c73f9d556e77ac108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33d23524487d116c73f9d556e77ac108)): ?>
<?php $component = $__componentOriginal33d23524487d116c73f9d556e77ac108; ?>
<?php unset($__componentOriginal33d23524487d116c73f9d556e77ac108); ?>
<?php endif; ?>
<!-- Category Popup -->
<?php if (isset($component)) { $__componentOriginalfd5d8855e17f141a205cdebfed296331 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd5d8855e17f141a205cdebfed296331 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category-popup','data' => ['categories' => $categories,'products' => $products]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category-popup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories),'products' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($products)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd5d8855e17f141a205cdebfed296331)): ?>
<?php $attributes = $__attributesOriginalfd5d8855e17f141a205cdebfed296331; ?>
<?php unset($__attributesOriginalfd5d8855e17f141a205cdebfed296331); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd5d8855e17f141a205cdebfed296331)): ?>
<?php $component = $__componentOriginalfd5d8855e17f141a205cdebfed296331; ?>
<?php unset($__componentOriginalfd5d8855e17f141a205cdebfed296331); ?>
<?php endif; ?>
<!-- Quick view Modal -->
<?php if (isset($component)) { $__componentOriginalf7ffef54e17a12bddd902775db84cdc9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf7ffef54e17a12bddd902775db84cdc9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.quick-view-modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('quick-view-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf7ffef54e17a12bddd902775db84cdc9)): ?>
<?php $attributes = $__attributesOriginalf7ffef54e17a12bddd902775db84cdc9; ?>
<?php unset($__attributesOriginalf7ffef54e17a12bddd902775db84cdc9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf7ffef54e17a12bddd902775db84cdc9)): ?>
<?php $component = $__componentOriginalf7ffef54e17a12bddd902775db84cdc9; ?>
<?php unset($__componentOriginalf7ffef54e17a12bddd902775db84cdc9); ?>
<?php endif; ?>
<!-- Newsletter Modal -->
<?php if (isset($component)) { $__componentOriginal8a3052428353b42fbd63f170b3c26520 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a3052428353b42fbd63f170b3c26520 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.newsletter-modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('newsletter-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a3052428353b42fbd63f170b3c26520)): ?>
<?php $attributes = $__attributesOriginal8a3052428353b42fbd63f170b3c26520; ?>
<?php unset($__attributesOriginal8a3052428353b42fbd63f170b3c26520); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a3052428353b42fbd63f170b3c26520)): ?>
<?php $component = $__componentOriginal8a3052428353b42fbd63f170b3c26520; ?>
<?php unset($__componentOriginal8a3052428353b42fbd63f170b3c26520); ?>
<?php endif; ?>
<!-- Back to top  -->
<?php if (isset($component)) { $__componentOriginal8c085ee5e7a39cd0ba199a1f86dfa0b2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c085ee5e7a39cd0ba199a1f86dfa0b2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.back-to-top','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('back-to-top'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8c085ee5e7a39cd0ba199a1f86dfa0b2)): ?>
<?php $attributes = $__attributesOriginal8c085ee5e7a39cd0ba199a1f86dfa0b2; ?>
<?php unset($__attributesOriginal8c085ee5e7a39cd0ba199a1f86dfa0b2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c085ee5e7a39cd0ba199a1f86dfa0b2)): ?>
<?php $component = $__componentOriginal8c085ee5e7a39cd0ba199a1f86dfa0b2; ?>
<?php unset($__componentOriginal8c085ee5e7a39cd0ba199a1f86dfa0b2); ?>
<?php endif; ?>
<!-- Plugins -->
<?php if (isset($component)) { $__componentOriginal68b5b6b5278ad5d9ad739656255d7f69 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68b5b6b5278ad5d9ad739656255d7f69 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.plugins','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('plugins'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68b5b6b5278ad5d9ad739656255d7f69)): ?>
<?php $attributes = $__attributesOriginal68b5b6b5278ad5d9ad739656255d7f69; ?>
<?php unset($__attributesOriginal68b5b6b5278ad5d9ad739656255d7f69); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68b5b6b5278ad5d9ad739656255d7f69)): ?>
<?php $component = $__componentOriginal68b5b6b5278ad5d9ad739656255d7f69; ?>
<?php unset($__componentOriginal68b5b6b5278ad5d9ad739656255d7f69); ?>
<?php endif; ?>

</body>

</html>
<?php /**PATH /var/www/resources/views/home.blade.php ENDPATH**/ ?>