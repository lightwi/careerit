<section class="autoflow" x-data="{ openAccordion: 1 }">
    <div class="container mx-auto px-4 md:px-0 py-8 sm:py-10 md:py-12 lg:py-16 xl:py-20 2xl:py-24">
        <div class="flex flex-col gap-4 sm:gap-6 lg:flex-row lg:justify-between lg:gap-12">
            <div class="lg:w-[40%]">
                <h2 class="font-poppins font-medium text-[36px] leading-[48px] tracking-[-0.02em] text-t-first">
                    Got any question
                </h2>
                <p class="font-roboto font-light text-[20px] leading-[27px] tracking-[0.02em] text-t-second mt-4">
                    We've helped hundreds of people who felt the same way. So
                    before you decide, here are the answers to the most common
                    questions — answered with honesty, not hype.
                </p>
            </div>
            <div class="text-sm md:text-base lg:text-lg xl:text-xl text-gray-600 font-light max-w-prose lg:w-[50%]">
                <!-- Accordion Item 1 -->
                <div class="overflow-hidden transition-all duration-300 mb-1 rounded-lg">
                    <button
                        @click="openAccordion === 1 ? openAccordion = null : openAccordion = 1"
                        class="flex justify-between items-center w-full p-5 cursor-pointer bg-gray-50 hover:bg-white transition-all duration-200"
                        :class="{'bg-white text-c-main': openAccordion === 1}"
                    >
                        <h2 class="font-poppins font-medium text-[18px] leading-[28px] tracking-[0]">
                            Do I need experience or a tech background to start?
                        </h2>
                        <svg
                            class="w-6 h-6 text-gray-600 transition-all duration-300"
                            :class="{'transform rotate-180 text-white': openAccordion === 1}"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7"
                            />
                        </svg>
                    </button>
                    <div
                        x-show="openAccordion === 1"
                        x-collapse
                        class="overflow-hidden transition-all duration-300 bg-white"
                    >
                        <div class="p-5 pt-0 text-gray-600">
                            <p class="font-poppins font-light text-[16px] leading-[26px] tracking-[0.02em]">
                                Not at all. In fact, CareerIntoIT was built for
                                people with no prior experience. Whether you're
                                in retail, hospitality, or just out of uni,
                                we'll help you understand exactly where to begin
                                and what skills matter most.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="overflow-hidden transition-all duration-300 mb-1 rounded-lg">
                    <button
                        @click="openAccordion === 2 ? openAccordion = null : openAccordion = 2"
                        class="flex justify-between items-center w-full p-5 cursor-pointer bg-gray-50 hover:bg-white transition-all duration-200"
                        :class="{'bg-white text-c-main': openAccordion === 2}"
                    >
                        <h2 class="font-poppins font-medium text-[18px] leading-[28px] tracking-[0]">
                            How is this roadmap different from other free guides?
                        </h2>
                        <svg
                            class="w-6 h-6 text-gray-600 transition-all duration-300"
                            :class="{'transform rotate-180 text-white': openAccordion === 2}"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7"
                            />
                        </svg>
                    </button>
                    <div
                        x-show="openAccordion === 2"
                        x-collapse
                        class="overflow-hidden transition-all duration-300 bg-white"
                    >
                        <div class="p-5 pt-0 text-gray-600">
                            <p class="font-poppins font-light text-[16px] leading-[26px] tracking-[0.02em]">
                                Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex
                                ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="overflow-hidden transition-all duration-300 mb-1 rounded-lg">
                    <button
                        @click="openAccordion === 3 ? openAccordion = null : openAccordion = 3"
                        class="flex justify-between items-center w-full p-5 cursor-pointer bg-gray-50 hover:bg-white transition-all duration-200"
                        :class="{'bg-white text-c-main': openAccordion === 3}"
                    >
                        <h2 class="font-poppins font-medium text-[18px] leading-[28px] tracking-[0]">
                            What if I'm already working or studying full-time?
                        </h2>
                        <svg
                            class="w-6 h-6 text-gray-600 transition-all duration-300"
                            :class="{'transform rotate-180 text-white': openAccordion === 3}"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7"
                            />
                        </svg>
                    </button>
                    <div
                        x-show="openAccordion === 3"
                        x-collapse
                        class="overflow-hidden transition-all duration-300 bg-white"
                    >
                        <div class="p-5 pt-0 text-gray-600">
                            <p class="font-poppins font-light text-[16px] leading-[26px] tracking-[0.02em]">
                                Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="overflow-hidden transition-all duration-300 mb-1 rounded-lg">
                    <button
                        @click="openAccordion === 4 ? openAccordion = null : openAccordion = 4"
                        class="flex justify-between items-center w-full p-5 cursor-pointer bg-gray-50 hover:bg-white transition-all duration-200"
                        :class="{'bg-white text-c-main': openAccordion === 4}"
                    >
                        <h2 class="font-poppins font-medium text-[18px] leading-[28px] tracking-[0]">
                            I'm not sure which digital career is right for me. Can you help?
                        </h2>
                        <svg
                            class="w-6 h-6 text-gray-600 transition-all duration-300"
                            :class="{'transform rotate-180 text-white': openAccordion === 4}"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7"
                            />
                        </svg>
                    </button>
                    <div
                        x-show="openAccordion === 4"
                        x-collapse
                        class="overflow-hidden transition-all duration-300 bg-white"
                    >
                        <div class="p-5 pt-0 text-gray-600">
                            <p class="font-poppins font-light text-[16px] leading-[26px] tracking-[0.02em]">
                                Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>