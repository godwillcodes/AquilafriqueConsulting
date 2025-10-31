<?php
get_header();
get_template_part('components/secondary-banner');
?>

 

    <main class="bg-[#FAFAF8]">
        <!-- Hero Section -->
        <section class="hero-gradient relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-20 left-20 w-72 h-72 bg-[#009868] rounded-full filter blur-3xl"></div>
                <div class="absolute bottom-20 right-20 w-96 h-96 bg-[#24bcc4] rounded-full filter blur-3xl"></div>
            </div>
            
            <div class="max-w-7xl mx-auto px-6 md:px-10 lg:px-16 py-20 md:py-20 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                    <!-- Overview / Philosophy -->
                    <div class="animate-fadeInUp">
                        
                        <div class="space-y-6 text-lg text-stone-600 leading-relaxed">
                            <p>At Aquilafrique, strategy is not theoretical—it is the discipline of execution. We align purpose with practice so that every plan moves beyond the page to produce measurable outcomes and systemic change.</p>
                            <p>Our Strategic Management service guides clients from vision to disciplined delivery: building robust frameworks, supporting implementation, and ensuring every action is accountable and measurable.</p>
                            <p>Through this, we sustain your momentum, close performance gaps, and empower your team for continuous improvement—advancing Aquilafrique's broader mission of enabling real-world progress across Africa.</p>
                        </div>
                    </div>
                    
                    <!-- Service Illustration -->
                    <div class="flex items-center justify-center animate-scaleIn" style="animation-delay: 0.2s;">
                        <div class="relative w-full max-w-lg aspect-square">
                            <div class="absolute inset-0 bg-gradient-to-br from-[#009868]/20 via-[#24bcc4]/20 to-[#ed9311]/20 rounded-3xl blur-2xl animate-float"></div>
                            <div class="relative bg-white/80 backdrop-blur-sm rounded-3xl border border-white/40 shadow-2xl p-16 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 100 100" class="w-full h-full">
                                    <rect x="8" y="8" width="84" height="84" rx="12" fill="url(#grad1)" fill-opacity="0.08"/>
                                    <rect x="20" y="20" width="60" height="60" rx="8" fill="url(#grad2)" fill-opacity="0.15"/>
                                    <rect x="32" y="32" width="36" height="36" rx="6" fill="url(#grad3)" fill-opacity="0.25"/>
                                    <circle cx="50" cy="50" r="8" fill="#009868"/>
                                    <defs>
                                        <linearGradient id="grad1" x1="0" y1="0" x2="100" y2="100">
                                            <stop offset="0%" stop-color="#009868"/>
                                            <stop offset="100%" stop-color="#24bcc4"/>
                                        </linearGradient>
                                        <linearGradient id="grad2" x1="0" y1="0" x2="100" y2="100">
                                            <stop offset="0%" stop-color="#24bcc4"/>
                                            <stop offset="100%" stop-color="#ed9311"/>
                                        </linearGradient>
                                        <linearGradient id="grad3" x1="0" y1="0" x2="100" y2="100">
                                            <stop offset="0%" stop-color="#009868"/>
                                            <stop offset="100%" stop-color="#118657"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Core Offerings -->
        <section class="py-24 md:py-20 relative">
            <div class="max-w-7xl mx-auto px-6 md:px-10 lg:px-16">
                <div class="text-center mb-16">
                    <h3 class="font-serif text-4xl md:text-4xl font-bold text-[#0b3435] mb-4">Core Offerings</h3>
                    <div class="w-24 h-1 bg-gradient-to-r from-[#009868] to-[#24bcc4] mx-auto rounded-full"></div>
                </div>
                
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Card 1 -->
                    <div class="group gradient-border card-shine rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="p-8">
                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#DCFBE6] to-[#009868]/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-[#0ab577]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                            </div>
                            <h4 class="font-semibold text-2xl text-[#0b3435] mb-4">Plan Design</h4>
                            <p class="text-gray-600 leading-relaxed">Develop tailored strategic or business plans fully aligned with your growth objectives and context.</p>
                        </div>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="group gradient-border card-shine rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" style="animation-delay: 0.1s;">
                        <div class="p-8">
                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#D4F1ED] to-[#24bcc4]/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-[#24bcc4]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m0 0V8m0 4v4m12-6A9 9 0 11 3 12a9 9 0 0118 0z"/></svg>
                            </div>
                            <h4 class="font-semibold text-2xl text-[#0b3435] mb-4">Plan Review</h4>
                            <p class="text-gray-600 leading-relaxed">Audit existing plans for relevance, feasibility, and real-world implementation readiness.</p>
                        </div>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="group gradient-border card-shine rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" style="animation-delay: 0.2s;">
                        <div class="p-8">
                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#F8EDDD] to-[#ed9311]/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-[#ed9311]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm0 0c0 1.1.9 2 2 2s2-.9 2-2-.9-2-2-2-2 .9-2 2zm0 0V18"/></svg>
                            </div>
                            <h4 class="font-semibold text-2xl text-[#0b3435] mb-4">Capacity Coaching</h4>
                            <p class="text-gray-600 leading-relaxed">Coach and train your teams to manage, monitor, and continuously refine your organization's strategies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process / Methodology -->
        <section class="py-24 md:py-20 bg-gradient-to-b from-white to-[#F9F8F6] relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 left-1/4 w-96 h-96 bg-[#009868] rounded-full filter blur-3xl"></div>
            </div>
            
            <div class="max-w-7xl mx-auto px-6 md:px-10 lg:px-16 relative z-10">
                <div class="text-center mb-20">
                    <h3 class="font-serif text-4xl md:text-4xl font-bold text-[#0b3435] mb-4">Our Process</h3>
                    <div class="w-24 h-1 bg-gradient-to-r from-[#009868] to-[#24bcc4] mx-auto rounded-full"></div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 process-line">
                    <!-- Step 1 -->
                    <div class="relative">
                        <div class="flex flex-col items-center text-center group">
                            <div class="relative mb-6">
                                <div class="absolute inset-0 bg-[#009868]/20 rounded-full filter blur-xl group-hover:blur-2xl transition-all"></div>
                                <div class="relative w-20 h-20 rounded-full bg-gradient-to-br from-[#009868] to-[#118657] flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-300">
                                    <span class="font-bold text-white text-2xl">1</span>
                                </div>
                            </div>
                            <span class="font-semibold text-xl text-[#0b3435] mb-3">Assessment</span>
                            <span class="text-gray-600 leading-relaxed">Understand client goals, maturity, and operational reality.</span>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="relative">
                        <div class="flex flex-col items-center text-center group">
                            <div class="relative mb-6">
                                <div class="absolute inset-0 bg-[#24bcc4]/20 rounded-full filter blur-xl group-hover:blur-2xl transition-all"></div>
                                <div class="relative w-20 h-20 rounded-full bg-gradient-to-br from-[#24bcc4] to-[#009868] flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-300">
                                    <span class="font-bold text-white text-2xl">2</span>
                                </div>
                            </div>
                            <span class="font-semibold text-xl text-[#0b3435] mb-3">Co-creation</span>
                            <span class="text-gray-600 leading-relaxed">Build actionable frameworks collaboratively with client teams.</span>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="relative">
                        <div class="flex flex-col items-center text-center group">
                            <div class="relative mb-6">
                                <div class="absolute inset-0 bg-[#118657]/20 rounded-full filter blur-xl group-hover:blur-2xl transition-all"></div>
                                <div class="relative w-20 h-20 rounded-full bg-gradient-to-br from-[#118657] to-[#24bcc4] flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-300">
                                    <span class="font-bold text-white text-2xl">3</span>
                                </div>
                            </div>
                            <span class="font-semibold text-xl text-[#0b3435] mb-3">Implementation Support</span>
                            <span class="text-gray-600 leading-relaxed">Guide and monitor delivery, adjust approaches and accelerate results.</span>
                        </div>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="relative">
                        <div class="flex flex-col items-center text-center group">
                            <div class="relative mb-6">
                                <div class="absolute inset-0 bg-[#ed9311]/20 rounded-full filter blur-xl group-hover:blur-2xl transition-all"></div>
                                <div class="relative w-20 h-20 rounded-full bg-gradient-to-br from-[#ed9311] to-[#118657] flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-300">
                                    <span class="font-bold text-white text-2xl">4</span>
                                </div>
                            </div>
                            <span class="font-semibold text-xl text-[#0b3435] mb-3">Evaluation</span>
                            <span class="text-gray-600 leading-relaxed">Capture lessons, measure progress, and enable sustainable improvement.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outcomes / Impact -->
        <section class="py-24 md:py-32">
            <div class="max-w-7xl mx-auto px-6 md:px-10 lg:px-16">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <!-- Left: Benefits -->
                    <div>
                        <h3 class="font-serif text-4xl md:text-5xl font-bold text-[#0b3435] mb-12">What You Gain</h3>
                        <div class="space-y-6">
                            <div class="flex items-start gap-4 group">
                                <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-[#009868] to-[#118657] flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <p class="text-lg text-gray-700 leading-relaxed pt-2">Clear, actionable plans that attract support or funding and drive progress.</p>
                            </div>
                            <div class="flex items-start gap-4 group">
                                <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-[#24bcc4] to-[#009868] flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <p class="text-lg text-gray-700 leading-relaxed pt-2">Strengthened internal decision-making and performance systems.</p>
                            </div>
                            <div class="flex items-start gap-4 group">
                                <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-[#118657] to-[#24bcc4] flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <p class="text-lg text-gray-700 leading-relaxed pt-2">Increased operational transparency and accountability.</p>
                            </div>
                            <div class="flex items-start gap-4 group">
                                <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-[#ed9311] to-[#118657] flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <p class="text-lg text-gray-700 leading-relaxed pt-2">Empowered, upskilled teams equipped for ongoing change.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right: Visual -->
                    <div class="flex justify-center lg:justify-end">
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-[#009868]/20 to-[#24bcc4]/20 rounded-3xl blur-2xl"></div>
                            <img src="https://cdn.jsdelivr.net/gh/cursor-codegen/copy-assets/strategy-results.svg" alt="Impactful Results Illustration" class="relative w-full max-w-lg rounded-3xl shadow-2xl" loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Services -->
        <section class="py-24 md:py-32 bg-gradient-to-br from-[#e6f7ef] via-[#f0f9f4] to-[#e6f7ef] relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-[#24bcc4] rounded-full filter blur-3xl"></div>
            </div>
            
            <div class="max-w-7xl mx-auto px-6 md:px-10 lg:px-16 relative z-10">
                <div class="text-center mb-16">
                    <h3 class="font-serif text-4xl md:text-5xl font-bold text-[#0b3435] mb-4">Explore Related Services</h3>
                    <div class="w-24 h-1 bg-gradient-to-r from-[#009868] to-[#24bcc4] mx-auto rounded-full"></div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">
                    <!-- Card 1 -->
                    <a href="/services/strategic-planning-and-business-planning" class="group relative bg-white rounded-3xl shadow-xl hover:shadow-2xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2">
                        <div class="overflow-hidden">
                            <img src="https://cdn.jsdelivr.net/gh/cursor-codegen/copy-assets/plan-writing.webp" alt="Strategic Planning & Business Planning" class="w-full h-64 object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        </div>
                        <div class="p-8">
                            <h4 class="text-2xl font-semibold text-[#0b3435] mb-4 group-hover:text-[#009868] transition-colors">Strategic Planning & Business Planning</h4>
                            <p class="text-gray-600 leading-relaxed mb-4">Define direction, align stakeholders, and produce bankable plans grounded in market realities.</p>
                            <div class="flex items-center text-[#009868] font-semibold group-hover:gap-3 transition-all">
                                <span>Learn More</span>
                                <svg class="w-5 h-5 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Card 2 -->
                    <a href="/services/capacity-development" class="group relative bg-white rounded-3xl shadow-xl hover:shadow-2xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2">
                        <div class="overflow-hidden">
                            <img src="https://cdn.jsdelivr.net/gh/cursor-codegen/copy-assets/capacity-building.webp" alt="Capacity Development" class="w-full h-64 object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        </div>
                        <div class="p-8">
                            <h4 class="text-2xl font-semibold text-[#0b3435] mb-4 group-hover:text-[#009868] transition-colors">Capacity Development</h4>
                            <p class="text-gray-600 leading-relaxed mb-4">Strengthen your organization's capabilities for lasting, self-driven improvement.</p>
                            <div class="flex items-center text-[#009868] font-semibold group-hover:gap-3 transition-all">
                                <span>Learn More</span>
                                <svg class="w-5 h-5 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>


<?php get_footer(); ?>
