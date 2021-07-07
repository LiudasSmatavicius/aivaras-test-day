<section class="social">
    <div class="social__container container">
        <div class="social__col">
            <div class="social__row social__row--gap">
                <img src="{{ asset('images/salad.png') }}" alt="Salads" class="social__salads">
            </div>
            <div class="social__row">
                <h2 class="social__heading"><span class="social__heading-first">Not</span> a hype diet.</h2>
                <p class="social__info">“The ketogenic diet is a very low-carb, high-fat diet. It involves drastically
                    reducing carbohydrate intake and replacing it with fats. This reduction in carbs puts your body into
                    a
                    metabolic state called ketosis. Despite the recent hype, a ketogenic diet is not something new. In
                    medicine, we have been using it for almost 100 years to treat drug-resistant epilepsy, especially in
                    children. Now, the keto diet has been adapted for everyday use by matching plans to personal
                    anthropometric characteristics and evaluating each client's needs personally,” says Dr. Grace
                    Connolly
                    DrPH.
                </p>
                <a href="#" class="social__link">Read more</a>
            </div>
        </div>
        <div class="social__col social__col--gap">
            <div class="social__row">
                <h2 class="social__heading"><span class="social__heading-first">From</span> one friend to another .</h2>
                <p class="social__info">With over 500k plans crafted, see what KetoCycle users have to say.</p>

                <div class="social__testimonials">
                    <div class="social__testimonial">
                        <img src="{{ asset('images/carter.png') }}" alt="Testimonial carter" class="social__testimonial-avatar">
                        <div class="social__testimonial-full">
                            <span class="social__testimonial-name">Carter Abrams</span>
                            <span class="social__testimonial-place">East Village, USA 26</span>
                            <div class="social__testimonial-stars">
                                @for($i = 0; $i < 5; $i++)
                                    <img src="{{ asset('images/review-star.svg') }}" alt="Review star" class="social__testimonial-star">
                                @endfor
                            </div>
                            <p class="social__testimonial-review">
                                Love this plan! It really kicked my entire quarantine routine into high gear and has
                                helped me lose a lot of extra belly weight. I’m feeling stronger than before!
                            </p>
                        </div>
                    </div>
                    <div class="social__testimonial">
                        <img src="{{ asset('images/suzan.png') }}" alt="Testimonial carter" class="social__testimonial-avatar">
                        <div class="social__testimonial-full">
                            <span class="social__testimonial-name">Suzan Scott-Phillips</span>
                            <span class="social__testimonial-place">Riverside, USA 42</span>
                            <div class="social__testimonial-stars">
                                @for($i = 0; $i < 5; $i++)
                                    <img src="{{ asset('images/review-star.svg') }}" alt="Review star" class="social__testimonial-star">
                                @endfor
                            </div>
                            <p class="social__testimonial-review">
                                I tried following the diet on my own but failed the first week. The app is a great guide and keeps you on track with food. Friendly staff to help too.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
