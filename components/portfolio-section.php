<section id="portfolio" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Our Portfolio
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Discover some of our recent projects that showcase our expertise across various industries and technologies.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $projects = [
                [
                    'title' => 'E-Commerce Platform',
                    'description' => 'A comprehensive e-commerce solution with advanced inventory management and analytics.',
                    'image' => 'https://images.pexels.com/photos/230544/pexels-photo-230544.jpeg',
                    'tags' => ['React', 'Node.js', 'MongoDB', 'Stripe'],
                    'category' => 'Web Development'
                ],
                [
                    'title' => 'Healthcare Management System',
                    'description' => 'Complete patient management system with appointment scheduling and medical records.',
                    'image' => 'https://images.pexels.com/photos/40568/medical-appointment-doctor-healthcare-40568.jpeg',
                    'tags' => ['Vue.js', 'Python', 'PostgreSQL', 'Docker'],
                    'category' => 'Healthcare'
                ],
                [
                    'title' => 'Financial Analytics Dashboard',
                    'description' => 'Real-time financial data visualization and reporting platform for investment firms.',
                    'image' => 'https://images.pexels.com/photos/590041/pexels-photo-590041.jpeg',
                    'tags' => ['Angular', 'D3.js', 'AWS', 'Machine Learning'],
                    'category' => 'FinTech'
                ],
                [
                    'title' => 'Mobile Banking App',
                    'description' => 'Secure mobile banking application with biometric authentication and real-time transactions.',
                    'image' => 'https://images.pexels.com/photos/4386366/pexels-photo-4386366.jpeg',
                    'tags' => ['React Native', 'Blockchain', 'Biometrics', 'API'],
                    'category' => 'Mobile App'
                ],
                [
                    'title' => 'IoT Monitoring Platform',
                    'description' => 'Industrial IoT platform for monitoring and controlling manufacturing equipment.',
                    'image' => 'https://images.pexels.com/photos/2599244/pexels-photo-2599244.jpeg',
                    'tags' => ['IoT', 'Real-time', 'MQTT', 'Time Series DB'],
                    'category' => 'IoT'
                ],
                [
                    'title' => 'AI-Powered CRM',
                    'description' => 'Customer relationship management system with AI-driven insights and automation.',
                    'image' => 'https://images.pexels.com/photos/3183153/pexels-photo-3183153.jpeg',
                    'tags' => ['AI/ML', 'CRM', 'Automation', 'Analytics'],
                    'category' => 'AI/ML'
                ]
            ];

            foreach ($projects as $index => $project): ?>
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover group">
                    <div class="relative overflow-hidden">
                        <img 
                            src="<?php echo $project['image']; ?>" 
                            alt="<?php echo $project['title']; ?>"
                            class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500"
                        />
                        <div class="absolute top-4 left-4">
                            <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                                <?php echo $project['category']; ?>
                            </span>
                        </div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                            <div class="flex space-x-4">
                                <button class="bg-white/90 p-3 rounded-full hover:bg-white transition-colors">
                                    <svg class="h-5 w-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </button>
                                <button class="bg-white/90 p-3 rounded-full hover:bg-white transition-colors">
                                    <svg class="h-5 w-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                            <?php echo $project['title']; ?>
                        </h3>
                        
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            <?php echo $project['description']; ?>
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm font-medium">
                                    <?php echo $tag; ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                        
                        <a href="?page=contact" class="flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors group">
                            View Case Study
                            <svg class="ml-2 h-4 w-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-12">
            <a href="?page=portfolio" class="bg-blue-600 text-white px-8 py-4 rounded-full font-semibold hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                View All Projects
            </a>
        </div>
    </div>
</section>