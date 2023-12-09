@extends('endUser.Layouts.master')

@section('title', 'Features')

@section('content')
    <!-- Start Header Section  -->
    <header class="header">
        <div class="header__banar">
            <h1>features</h1>
            <ul class="header__banar__breadcrumb">
                <li>
                    <a href="{{ route('endUser.home') }}">
                        Home
                    </a>
                </li>
                <li>
                    Features
                </li>
            </ul>
        </div>
    </header>
    <!-- End Header Section  -->

    <!-- Start Features Section  -->
    <section class="features py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="main__headding">
                        Features
                    </h2>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card features__page">
                        <div class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/book.avif') }}" alt="Channel Book"
                                 title="Channel Book" width="127">
                        </div>
                        <h5 class="features__card__title">
                            Channel Book
                        </h5>
                        <p class="features__card__desc">
                            By remaining at home, you can partake in <span class="fw-bold">kids' nursery
                                activities</span> With a daily
                            report from
                            the management, your discussions with your kids in the evening will be more productive.
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card features__page">
                        <div class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/children.avif') }}" alt="Profile"
                                 title="Profile" width="127">
                        </div>
                        <h5 class="features__card__title">
                            Profile
                        </h5>
                        <p class="features__card__desc">
                            Establish a profile for your child that provides data about their birthday, gender, and
                            religion so that the <span class="fw-bold">nursery administration</span> is mindful of your
                            preferences.
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card features__page">
                        <div class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/expenses.webp') }}" alt="Cash In-Out"
                                 title="Cash In-Out" width="127">
                        </div>
                        <h5 class="features__card__title">
                            Cash In-Out
                        </h5>
                        <p class="features__card__desc">
                            Manage all of your financial transactions on one platform. The payment methods will be
                            hassle-free thanks to this cash flow management of our app.
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card features__page">
                        <div class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/abc-block.webp') }}" alt="Academy"
                                 title="Academy" width="127">
                        </div>
                        <h5 class="features__card__title">
                            Academy
                        </h5>
                        <p class="features__card__desc">
                            Get to know the curricular activities, so you know what your kid knows. You can compare the
                            value with your expenses and get updated about the syllabi.
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card features__page">
                        <div class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/family.webp') }}" alt="Gallery"
                                 title="Gallery" width="127">
                        </div>
                        <h5 class="features__card__title">
                            Gallery
                        </h5>
                        <p class="features__card__desc">
                            As long as you and your child have access, you can view the events and activities in class.
                            You will feel relieved from handling the album with <span class="fw-bold">Kiddowz</span>
                            pictorials.
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card features__page">
                        <div class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/notepad.webp') }}" alt="Notes"
                                 title="Notes" width="127">
                        </div>
                        <h5 class="features__card__title">
                            Notes
                        </h5>
                        <p class="features__card__desc">
                            Receive messages from the <span class="fw-bold">nursery administration</span> informing you
                            about your
                            child, class, or
                            nursery. Every single beep will bring you nearer to your child.
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card features__page">
                        <div class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/report.avif') }}" alt="Reports"
                                 title="Reports" width="127">
                        </div>
                        <h5 class="features__card__title">
                            Reports
                        </h5>
                        <p class="features__card__desc">
                            Receive a <span class="fw-bold">nursery's follow-up</span> on the children's feeding,
                            attendance, toileting, and conduct
                            at the nursery. Parents are also now a part of their <span class="fw-bold">kids' nursery
                                systems.</span>
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card features__page">
                        <div class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/apple.webp') }}" alt="Food Menu"
                                 title="Food Menu" width="127">
                        </div>
                        <h5 class="features__card__title">
                            Food Menu
                        </h5>
                        <p class="features__card__desc">
                            Get access to your <span class="fw-bold">child's class menu</span> for food. Make decisions
                            and implement adjustments
                            based on your children's mental and physical health.
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card features__page">
                        <div class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/attendance.webp') }}" alt="Attendance"
                                 title="Attendance" width="127">
                        </div>
                        <h5 class="features__card__title">
                            Attendance
                        </h5>
                        <p class="features__card__desc">
                            It is essential to set the kids' attendance daily to keep track of their whereabouts and
                            activities, and we cover all the crucial aspects.
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card features__page">
                        <div class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/cupcake.webp') }}" alt="Birthday"
                                 title="Birthday" width="127">
                        </div>
                        <h5 class="features__card__title">
                            Birthday
                        </h5>
                        <p class="features__card__desc">
                            <span class="fw-bold">Nursery management</span> need not list the kids having a birthday
                            this month. <span class="fw-bold">Kiddowz</span> manages this
                            with a systematic approach; you control the event.
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card features__page">
                        <div class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/marathon.avif') }}" alt="marathon"
                                 title="marathon" width="127">
                        </div>
                        <h5 class="features__card__title">
                            marathon
                        </h5>
                        <p class="features__card__desc">
                            You work on creating all events in one day, after which you receive notifications all year
                            round. The parents will also be notified automatically.
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card features__page">
                        <div class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/chat.avif') }}" alt="Parent Questions"
                                 title="Parent Questions" width="127">
                        </div>
                        <h5 class="features__card__title">
                            Parent Questions
                        </h5>
                        <p class="features__card__desc">
                            <span class="fw-bold">Kiddowz</span> makes life simpler for parents to get in touch with the
                            <span class="fw-bold">nursery management</span> anytime
                            and ask questions.
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card features__page">
                        <div class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/call-center-agent.avif') }}"
                                 alt="Customer Support" title="Customer Support" width="127">
                        </div>
                        <h5 class="features__card__title">
                            Customer Support
                        </h5>
                        <p class="features__card__desc">
                            Nursery <span class="fw-bold">staff</span> and parents can get support from a qualified team
                            using the app; our formal
                            business whatsapp is available 24/7.
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card features__page">
                        <div class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/mentor.webp') }}"
                                 alt="Staff Management" title="Staff Management" width="127">
                        </div>
                        <h5 class="features__card__title">
                            Staff Management
                        </h5>
                        <p class="features__card__desc">
                            Nursery owners can add a Manager with full access to management and teachers, assign them to
                            a specific class or task, and perform a <span class="fw-bold">nursery follow-up.</span>
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card features__page">
                        <div class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/team.avif') }}" alt="Multi Users"
                                 title="Multi Users" width="127">
                        </div>
                        <h5 class="features__card__title">
                            Multi Users
                        </h5>
                        <p class="features__card__desc">
                            If you have more than one kid, we have more than one user interface. To help you track every
                            kid separately.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 py-5">
                <h2 class="waiting">
                    Wait for none!<br>
                    Make it done
                </h2>
            </div>
        </div>
        </div>
    </section>
    <!-- End Features Section  -->
@endsection
