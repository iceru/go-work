<x-app-layout>
    <header>
        <div class="container">
            <div class="headerContent">
                <h1>
                    Heading for Lorem Ipsum Dolor sit Amet, Consectetur Elit.
                </h1>
                <p>
                    Introduction for lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna.
                </p>

                <div class="location">
                    <div class="ico">
                        <img src="{{ asset('images/location.png') }}" alt="">
                    </div>
                    <div class="ico arrow">
                        <img src="{{ asset('images/collapse.png') }}" alt="">
                    </div>
                    <select name="location" id="location">
                        <option value="" class="defaultOpt">
                            Select Location</option>
                        @foreach ($locations as $location)
                            <option value="{{ $location->value }}">{{ $location->title }}</option>
                        @endforeach
                    </select>
                </div>

                <button class="btn black">
                    Find Space
                </button>
            </div>
            <div class="headerArrows">
                <button>
                    <img src="{{ asset('images/arrow-left.png') }}" alt="">
                </button>
                <button>
                    <img src="{{ asset('images/arrow-right.png') }}" alt="">
                </button>
            </div>
        </div>
        <div class="headerImage">
            <img src="{{ asset('images/header-1.png') }}" alt="">
        </div>
    </header>
    <main class="container">
        <section class="findPlans">
            <h3>
                Find the plan LOREM IPSUM DOLOR
            </h3>
            <div class="plans">
                @foreach ($plans as $plan)
                    <div class="planItem">
                        <div class="planDesc">
                            <div class="planImage">
                                <img src="{{ asset('images/plan.png') }}" alt="">
                            </div>
                            <h5>{{ $plan }}</h5>
                            <p class="planText">Introduction Lorem ipsum dolor sit amet, consectetur.</p>
                            <ul>
                                <li>
                                    <div>
                                        <img src="{{ asset('images/benefit.png') }}" alt="">
                                    </div>
                                    <p>Benefit</p>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('images/benefit.png') }}" alt="">
                                    </div>
                                    <p>Benefit</p>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('images/benefit.png') }}" alt="">
                                    </div>
                                    <p>Benefit</p>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('images/benefit.png') }}" alt="">
                                    </div>
                                    <p>Benefit</p>
                                </li>
                            </ul>
                        </div>
                        <div class="planPrice">
                            <p>Starts from</p>
                            <h5 class="subtitle-2">Rp 2.800.000*</h5>
                            <h5 class="subtitle-3">/pax/month</h5>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>

        <section>
            <p class="caption">
                Caption for lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia
                deserunt mollit anim id est laborum.
            </p>
        </section>

        <section class="included">
            <h3>All plans lorem ipsum</h3>

            <div class="content">
                <div>
                    <h4 class="title">
                        Title Lorem Ipsum Dolor
                    </h4>
                    <div class="text">
                        Description lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
                <div>
                    <h4 class="title">
                        Title Consectetur Adipiscing
                    </h4>
                    <div class="text">
                        Description lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
            </div>
        </section>

        <section class="event">
            <h4>Looking for a lorem ipsum dolor sit amet?</h4>
            <button class="btn btn-text">
                Call to Action
                <div class="icon">
                    <img src="{{ asset('images/chevron-right.png') }}" alt="">
                </div>
            </button>
        </section>
    </main>
</x-app-layout>
