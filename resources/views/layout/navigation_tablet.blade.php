<style >
    dialog {
        padding: 1rem 3rem;
        background: white;
        /* max-width: auto; */
        padding-top: 2rem;
        border-radius: 20px;
        border: 0;
        box-shadow: 0 5px 30px 0 rgb(0 0 0 / 10%);
        animation: fadeIn 1s ease both;
        &::backdrop {
            animation: fadeIn 1s ease both;
            background: rgb(255 255 255 / 40%);
            z-index: 2;
            backdrop-filter: blur(20px);
        }
        .x {
            filter: grayscale(1);
            border: none;
            background: none;
            position: absolute;
            top: 15px;
            right: 10px;
            transition: ease filter, transform 0.3s;
            cursor: pointer;
            transform-origin: center;
            &:hover {
                filter: grayscale(0);
                transform: scale(1.1);
            }
        }
        h2 {
            font-weight: 600;
            font-size: 2rem;
            padding-bottom: 1rem;
        }
        p {
            font-size: 1rem;
            line-height: 1.3rem;
            padding: 0.5rem 0;
            a {
                &:visited {
                    color: rgb(var(--vs-primary));
                }
            }
        }
    }

    button.primary {
        display: inline-block;
        font-size: 0.8rem;
        color: #fff !important;
        background: rgb(var(--vs-primary) / 100%);
        padding: 13px 25px;
        border-radius: 17px;
        transition: background-color 0.1s ease;
        box-sizing: border-box;
        transition: all 0.25s ease;
        border: 0;
        cursor: pointer;
        box-shadow: 0 10px 20px -10px rgb(var(--vs-primary) / 50%);
        &:hover {
            box-shadow: 0 20px 20px -10px rgb(var(--vs-primary) / 50%);
            transform: translateY(-5px);
        }
    }
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 0.9;
        }
    }

    .navbar1 {
        transition: all 0.5s !important;
    }

    .navbar-scrolled {
        background-color: #1c1c1c !important;
    }
</style>
@tablet
    <!-- Primary Navigation Menu -->
    <div class="sm:container  mx-auto px-0">
        <div class="flex justify-between h-15">
            <div class="flex items-center">
                <div class="hidden space-x-10 sm:flex mx-auto no-underline ">
                    <x-nav-link-tablet href="{{ url($langSeg.'/about-us') }}" :active="request()->routeIs('dashboard')" rel="canonical">
                        {{ __('ABOUT') }}
                    </x-nav-link-tablet>
                </div>

                <div class="hidden space-x-10 sm:flex mx-auto no-underline ">
                    <x-nav-link-tablet href="{{ url($langSeg.'/our-developments') }}" :active="request()->routeIs('dashboard')" rel="canonical">
                        {{ __('DEVELOPMENT') }}
                    </x-nav-link-tablet>
                </div>
            </div>

            <div class=" flex items-center ">
                <div class="shrink-0 flex items-center ">
                    <img style="height: 40px !important;" src="{{ asset('logo-dark.png') }}" alt="esnaad-logo-navbar">
                </div>
            </div>

            <div class="flex items-center">
                <div class="hidden space-x-10 sm:flex mx-auto no-underline ">
                    <x-nav-link-tablet href="{{ url($langSeg.'/our-communities') }}" :active="request()->routeIs('dashboard')" rel="canonical">
                        {{ __('COMMUNITY') }}
                    </x-nav-link-tablet>
                </div>


                <div class="hidden space-x-10 sm:flex text-center">
                    <x-nav-link-tablet href="{{ url($langSeg.'/contact-us') }}" :active="request()->routeIs('home')" rel="canonical">
                        {{ __('CONTACT') }}
                    </x-nav-link-tablet>
                </div>
            </div>
            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-700 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
@endtablet