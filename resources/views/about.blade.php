@extends('layouts.app')

@section('title', __('app.titles.about_title'))
@section('description', __('app.contents.about_content'))
@section('keywords', __('app.keywords.about_keywords'))

@section('content')
@if(app()->getLocale()=="en")
<div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">{{__('app.navbar.about')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">{{__('app.navbar.home')}}</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{__('app.navbar.about')}}</li>
                </ol>
            </nav>
        </div>
    </div>
<!-- About Us Section Start -->
<section id="about-us" class="aboutus container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <!-- Left Column: About Us Content -->
            <div class="col-lg-6">
                <h1 class="display-6 mb-4">About Alkofyah Bakery and Sweets</h1>
                <div class="wow bounceInLeft" data-wow-delay="0.2s">
                <h3>Our Story</h3>
                <p >At Alkofyah Bakery and Sweets, we are passionate about preserving and sharing the rich heritage of Palestinian and Arabic flavors. Our journey began with a simple idea: to bring the timeless taste of traditional Middle Eastern baked goods to modern tables, while maintaining the authenticity and quality of the ingredients and recipes passed down through generations.</p>
                <p>Based in the heart of our community, we pride ourselves on offering fresh, handmade products that reflect the essence of Palestinian and Arabic cuisine. Whether it's our signature <strong>Taboon bread</strong>, delicate <strong>baklava</strong>, or <strong>ma'amoul</strong>, every item is crafted with love and attention to detail.</p>
                <div class="wow bounceInLeft" data-wow-delay="0.4s">
                </div>
                
                <h3>Our Philosophy</h3>
                <p>We believe in the power of food to bring people together, create memories, and celebrate life's special moments. At Alkofyah, we uphold a commitment to quality by using only the finest natural ingredients. We bake everything from scratch, ensuring that each bite delivers the authentic flavors of our heritage.</p>
                <p>From the warmth of our <strong>freshly baked bread</strong> to the sweetness of our <strong>sweets</strong>, every product is a testament to our dedication to excellence. Whether you’re visiting us for breakfast, ordering a custom cake for a celebration, or enjoying a cozy afternoon treat, we’re here to provide a memorable culinary experience.</p>
                </div>
                <h3>Why Choose Us?</h3>
                <ul >
                    <li class="wow bounceInLeft" data-wow-delay="0.2s"><strong>Traditional and Authentic Recipes:</strong> We use time-honored techniques and authentic recipes that have been handed down through generations, so you can experience the true taste of Palestine and the broader Arab world.</li>
                    <li class="wow bounceInLeft" data-wow-delay="0.4s"><strong>Freshly Baked Daily:</strong> Every product at Alkofyah Bakery is baked fresh daily to ensure the best quality and taste in every bite.</li>
                    <li class="wow bounceInLeft" data-wow-delay="0.6s"><strong>Quality Ingredients:</strong> We believe that great baking starts with great ingredients. That’s why we source only the finest, locally sourced ingredients to create our products.</li>
                    <li class="wow bounceInLeft" data-wow-delay="0.8s"><strong>Custom Creations:</strong> Whether it’s a special occasion or you simply want something unique, we offer customized cakes and baked goods tailored to your preferences.</li>
                    <li class="wow bounceInLeft" data-wow-delay="1.0s"><strong>Home Delivery:</strong> Enjoy the convenience of having your favorite bakery items delivered directly to your door with our fast and reliable home delivery service.</li>
                </ul>

                <h3>Our Mission</h3>
                <p>Our mission is simple: to deliver the highest quality traditional baked goods and sweets, all while providing exceptional service to our customers. At Alkofyah Bakery and Sweets, we are committed to ensuring that every visit, order, and bite is a celebration of flavor, heritage, and community.</p>
                
                <h3>Join Us on Our Journey</h3>
                <p>We invite you to visit us at <strong>Alkofyah Bakery and Sweets</strong>, whether in person or online, and experience the flavors that have made us a cherished part of the community. From the moment you step into our bakery, we hope to make you feel at home, with warm smiles, the smell of fresh bread, and a delicious array of treats waiting for you.</p>
                <p>Thank you for being a part of our story. We look forward to serving you for many years to come!</p>
            </div>

            <!-- Right Column: Image of the Bakery or Products -->
            <div class="col-lg-6">
                <img src="{{asset('img/about-1.jpg')}}" class="img-fluid rounded mb-4" alt="Alkofyah Bakery products, freshly baked bread, and traditional sweets">
                <img src="{{asset('img/about-2.jpg')}}" class="img-fluid rounded" alt="Traditional Palestinian bakery process, baking taboon bread and preparing sweets">
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->
@elseif(app()->getLocale()=="ar")
<!-- Arabic Translation -->
<section id="about-us-ar" class="aboutus container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <!-- Left Column: Arabic About Us Content -->
            <div class="col-lg-6">
                <h1 class="display-6 mb-4">عن مخبز وحلويات الكوفية</h1>
                <div class="wow bounceInRight" data-wow-delay="0.2s">
                <h3>قصتنا</h3>
                <p>في "مخبز وحلويات الكوفية"، نحن شغوفون بالحفاظ على التراث الفلسطيني والعربي ومشاركته. بدأت رحلتنا بفكرة بسيطة: إحضار طعم المخبوزات التقليدية من الشرق الأوسط إلى موائد العصر الحديث، مع الحفاظ على أصالة وجودة المكونات والوصفات التي تم تمريرها عبر الأجيال.</p>
                <p>مستقرون في قلب مجتمعنا، نفخر بتقديم منتجات طازجة ومصنوعة يدويًا تعكس جوهر المأكولات الفلسطينية والعربية. سواء كان **خبز الطابون** المميز لدينا أو **البقلاوة** الرقيقة أو **المعمول**، كل منتج مصنوع بحب واهتمام بالتفاصيل.</p>
                </div>
                <div class="wow bounceInRight" data-wow-delay="0.3s">

                <h3>فلسفتنا</h3>
                <p>نعتقد في قوة الطعام في جمع الناس معًا، وخلق الذكريات، والاحتفال بلحظات الحياة الخاصة. في الكوفية، نتمسك بالالتزام بالجودة من خلال استخدام أفضل المكونات الطبيعية. نحن نخبز كل شيء من البداية، لضمان أن كل قضمة تقدم نكهاتنا الأصلية.</p>
                <p>من دفء **الخبز الطازج** إلى حلاوة **الحلويات**، كل منتج هو شهادة على تفانينا في التميز. سواء كنت تزورنا لتناول الإفطار، أو تطلب كعكة مخصصة لمناسبة خاصة، أو تستمتع بتناول حلوى لذيذة في فترة بعد الظهر، نحن هنا لنقدم لك تجربة طعام لا تُنسى.</p>
                </div>
                <h3>لماذا تختارنا؟</h3>
                <ul >
                    <li class="wow bounceInRight" data-wow-delay="0.3s"><strong>وصفات تقليدية وأصيلة:</strong> نحن نستخدم تقنيات وصفات أصيلة وموروثة عبر الأجيال، لتتمكن من تجربة الطعم الحقيقي لفلسطين والعالم العربي.</li>
                    <li class="wow bounceInRight" data-wow-delay="0.4s"><strong>طازج يوميًا:</strong> يتم خبز جميع منتجات "مخبز وحلويات الكوفية" طازجة يوميًا لضمان أفضل جودة وطعم في كل قضمة.</li>
                    <li class="wow bounceInRight" data-wow-delay="0.5s"><strong>مكونات عالية الجودة:</strong> نؤمن أن الخبز الممتاز يبدأ بمكونات ممتازة. لهذا السبب، نختار أفضل المكونات الطبيعية والمحلية لصنع منتجاتنا.</li>
                    <li class="wow bounceInRight" data-wow-delay="0.6s"><strong>منتجات مخصصة:</strong> سواء كان لديك مناسبة خاصة أو كنت ترغب في شيء فريد، نقدم لك الكعك والحلويات المخصصة حسب رغبتك.</li>
                    <li class="wow bounceInRight" data-wow-delay="0.7s"><strong>توصيل للمنازل:</strong> استمتع براحة الحصول على منتجاتك المخبوزة المفضلة مُوصلة إلى باب منزلك من خلال خدمتنا السريعة والموثوقة.</li>
                </ul>

                <h3>مهمتنا</h3>
                <p>مهمتنا بسيطة: تقديم أفضل المخبوزات والحلويات التقليدية ذات الجودة العالية، مع تقديم خدمة استثنائية لعملائنا. في "مخبز وحلويات الكوفية"، نلتزم بضمان أن كل زيارة وكل طلب  هي احتفال بالنكهة والتراث والمجتمع.</p>
                
                <h3>انضموا إلينا في رحلتنا</h3>
                <p>ندعوكم لزيارتنا في **مخبز وحلويات الكوفية**، سواء بشكل شخصي أو عبر الإنترنت، وتجربة النكهات التي جعلتنا جزءًا عزيزًا من المجتمع. من اللحظة التي تدخل فيها إلى مخبزنا، نأمل أن تشعر وكأنك في منزلك، مع الابتسامات الدافئة ورائحة الخبز الطازج، وعدد لا يُحصى من الأطعمة الشهية في انتظارك.</p>
                <p>شكرًا لكم على كونكم جزءًا من قصتنا. نحن نتطلع إلى خدمتك لسنوات عديدة قادمة!</p>
            </div>

            <!-- Right Column: Image of the Bakery or Products (Arabic) -->
            <div class="col-lg-6">
                <img src="{{asset('img/about-1.jpg')}}" class="img-fluid rounded mb-4" alt="منتجات مخبز الكوفية، الخبز الطازج والحلويات التقليدية">
                <img src="{{asset('img/about-2.jpg')}}" class="img-fluid rounded" alt="عملية المخبز التقليدية الفلسطينية، خبز الطابون وإعداد الحلويات">
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->
@endif
@endsection