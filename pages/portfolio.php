<div class="pt-24">
    <!-- Hero Section -->
    <section class="py-20" style="background: linear-gradient(135deg, #1e40af 0%, #10b981 100%)">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">Our Portfolio</h1>
            <p class="text-xl text-white/90 max-w-3xl mx-auto">
                Explore our successful projects across various industries and discover how we've helped businesses achieve their digital transformation goals.
            </p>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $projects = [
                    [
                        'title' => 'E-Commerce Platform',
                        'description' => 'A comprehensive e-commerce solution with advanced inventory management, payment processing, and analytics dashboard.',
                        'image' => 'https://images.pexels.com/photos/230544/pexels-photo-230544.jpeg',
                        'tags' => ['React', 'Node.js', 'MongoDB', 'Stripe'],
                        'category' => 'E-commerce',
                        'duration' => '6 months'
                    ],
                    [
                        'title' => 'Healthcare Management System',
                        'description' => 'Complete patient management system with appointment scheduling, medical records, and telemedicine capabilities.',
                        'image' => 'https://images.pexels.com/photos/40568/medical-appointment-doctor-healthcare-40568.jpeg',
                        'tags' => ['Vue.js', 'Python', 'PostgreSQL', 'Docker'],
                        'category' => 'Healthcare',
                        'duration' => '8 months'
                    ],
                    [
                        'title' => 'Financial Analytics Dashboard',
                        'description' => 'Real-time financial data visualization and reporting platform for investment firms with advanced analytics.',
                        'image' => 'https://images.pexels.com/photos/590041/pexels-photo-590041.jpeg',
                        'tags' => ['Angular', 'D3.js', 'AWS', 'Machine Learning'],
                        'category' => 'FinTech',
                        'duration' => '5 months'
                    ],
                    [
                        'title' => 'Mobile Banking App',
                        'description' => 'Secure mobile banking application with biometric authentication, real-time transactions, and financial planning tools.',
                        'image' => 'https://images.pexels.com/photos/4386366/pexels-photo-4386366.jpeg',
                        'tags' => ['React Native', 'Blockchain', 'Biometrics', 'API'],
                        'category' => 'Mobile App',
                        'duration' => '7 months'
                    ],
                    [
                        'title' => 'IoT Monitoring Platform',
                        'description' => 'Industrial IoT platform for monitoring and controlling manufacturing equipment with predictive maintenance.',
                        'image' => 'https://images.pexels.com/photos/2599244/pexels-photo-2599244.jpeg',
                        'tags' => ['IoT', 'Real-time', 'MQTT', 'Time Series DB'],
                        'category' => 'IoT',
                        'duration' => '9 months'
                    ],
                    [
                        'title' => 'AI-Powered CRM',
                        'description' => 'Customer relationship management system with AI-driven insights, automation, and predictive analytics.',
                        'image' => 'https://images.pexels.com/photos/3183153/pexels-photo-3183153.jpeg',
                        'tags' => ['AI/ML', 'CRM', 'Automation', 'Analytics'],
                        'category' => 'AI/ML',
                        'duration' => '6 months'
                    ]
                ];

                foreach ($projects as $project): ?>
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
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
                        </div>
                        
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                                <?php echo $project['title']; ?>
                            </h3>
                            
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                <?php echo $project['description']; ?>
                            </p>
                            
                            <div class="flex flex-wrap gap-2 mb-4">
                                <?php foreach (array_slice($project['tags'], 0, 3) as $tag): ?>
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm font-medium">
                                        <?php echo $tag; ?>
                                    </span>
                                <?php endforeach; ?>
                                <?php if (count($project['tags']) > 3): ?>
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm font-medium">
                                        +<?php echo count($project['tags']) - 3; ?> more
                                    </span>
                                <?php endif; ?>
                            </div>
                            
                            <div class="flex items-center justify-between">
                                <a href="?page=contact" class="flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors group">
                                    View Details
                                    <svg class="ml-2 h-4 w-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <span class="text-sm text-gray-500"><?php echo $project['duration']; ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="rounded-2xl p-12 text-white" style="background: linear-gradient(to right, #2563eb, #16a34a)">
                <h3 class="text-3xl font-bold mb-4">Ready to Start Your Project?</h3>
                <p class="text-xl mb-8 opacity-90">
                    Let's discuss how we can help bring your vision to life with our proven expertise.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="mailto:sales@f24tech.com?subject=New Project Inquiry" class="bg-white text-blue-600 px-8 py-4 rounded-full font-semibold hover:bg-blue-50 transition-colors">
                        Start Your Project
                    </a>
                    <a href="?page=contact" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                        Schedule Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>