<?php

return [
    'categories' => ['All', 'Sedan', 'SUV', 'Luxury', 'Electric', 'Sports', 'Truck'],

    'products' => [
        [
            'id' => 1,
            'name' => 'Mercedes-Benz E-Class',
            'model' => '2024 AMG Line',
            'image' => 'https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&q=80&w=800',
            'star' => 5,
            'desc' => 'The definition of luxury driving.',
            'content' => 'Full leather interior with MBUX Hyperscreen.',
            'featured_images' => [],
            'best' => true,
            'properties' => ['Automatic', 'Petrol', '4-Door'],
            'category' => ['Sedan', 'Luxury'],
            'price' => 54000,
            'discount_price' => 52000,
            'discount_percentage' => 4,
            'content1' => 'The 2024 E-Class marks a significant leap in automotive intelligence. Combining classic luxury with the new MBUX Hyperscreen, it offers an unparalleled cockpit experience.',
            'content2' => 'Equipped with the AMG Line package, this model features 20-inch multi-spoke wheels and a sport-tuned suspension for a dynamic yet smooth ride.',
            'features_detail' => ['MBUX Navigation with AR', 'Burmester 4D Surround Sound', 'Panoramic Sunroof', 'Active Ambient Lighting'],
            'reviews' => [
                ['user' => 'James W.', 'comment' => 'Pure class. The interior lighting is futuristic.', 'rating' => 5],
            ],
        ],
        [
            'id' => 2,
            'name' => 'Tesla Model Y',
            'model' => '2024 Long Range',
            'image' => 'https://images.unsplash.com/photo-1619767886558-efdc259cde1a?auto=format&fit=crop&q=80&w=800',
            'star' => 4,
            'desc' => 'Leading the electric revolution.',
            'content' => 'Dual motor All-Wheel Drive.',
            'featured_images' => [],
            'best' => false,
            'properties' => ['Electric', 'AWD', 'Autopilot'],
            'category' => ['SUV', 'Electric'],
            'price' => 48000,
            'discount_price' => null,
            'discount_percentage' => 0,
            'content1' => 'The world’s best-selling electric SUV offers incredible versatility and safety. With a range of over 300 miles, it’s built for the long haul.',
            'content2' => 'The minimalist interior features a 15-inch touchscreen that controls everything, providing a clean, clutter-free environment.',
            'features_detail' => ['Full Self-Driving Capability', 'HEPA Air Filtration', 'Premium Audio - 13 Speakers', 'Inductive Charging'],
            'reviews' => [
                ['user' => 'Sarah K.', 'comment' => 'Acceleration is mind-blowing for an SUV.', 'rating' => 4],
            ],
        ],
        // ... add 4 more to complete the 6 categories
    ],
];
