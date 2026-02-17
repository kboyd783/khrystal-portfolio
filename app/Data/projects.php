<?php

return [
    //Gemstone

    

    [
    'card_image' => '/images/work/gem.png',
    'title' => 'Gemstone Design System',
    'slug' => 'gemstone-design-system',
    'type' => 'design-system',
    'summary' => 'Design tokens, components, and UI patterns for a construction SaaS.',
    'tags' => ['Design System', 'Figma', 'Tailwind'],
    'year' => 2026,

    // ✅ NEW: case study fields
    'role' => 'UX/UI + Front-end (Design System + Component Strategy)',
    'timeline' => 'Ongoing',
    'tools' => ['Figma', 'Tailwind', 'Vue (Inertia)', 'Laravel'],
    'problem' => 'UI inconsistency across pages slowed development and created a confusing experience.',
    'goals' => [
        'Create consistent components and typography',
        'Define color tokens and spacing rules',
        'Speed up delivery and reduce UI regressions',
    ],
    'process' => [
        ['title' => 'Audit', 'detail' => 'Reviewed existing screens and documented inconsistencies.'],
        ['title' => 'Tokens', 'detail' => 'Defined colors, typography, spacing, radius, and shadows.'],
        ['title' => 'Components', 'detail' => 'Built reusable card, button, table, and form patterns.'],
        ['title' => 'Guidelines', 'detail' => 'Documented usage rules and examples for the team.'],
    ],
    'design_iterations' => [
            'Used the three tiered approach to create the design system',
            'Created the brand colors (green, red, blue, yellow, etc.) with based on what was already in Gemstone, edited when needed',
            'From the brand I created an Alias colors (success, error, information, warning, etc). I did a scale to 900',
            'The last step was to map the colors.',
  
    ],
    'outcomes' => [
        'Reusable components reduced page build time.',
        'Consistent UI improved usability and trust.',
        'Clear guidelines made handoff easier.',
    ],
    'next_steps' => [
        'Add accessibility checks and contrast rules',
        'Expand component library for tables and filters',
        'Create a changelog + versioning approach',
    ],
    'images' => [
      [
        'src' =>  '/images/gemstone/buttons.png',
        'caption' => 'Button variants and states',
     ],
     [
        'src' => '/images/gemstone/Colorscale.png',
        'caption' => 'Color scale',
     ], 
     [
        'src' => '/images/gemstone/field.png',
        'caption' => 'Form Fields',
      ],
      [
        'src' => '/images/gemstone/typescale.png',
        'caption' => 'Typography'
      ], 
        
],
],


   [
  // SandBox
  'card_image' => '/images/work/peerspace.png',
  'title' => 'Peer Space',
  'slug' => 'sbox',
  'type' => 'ux',
  'summary' => 'A collaborative study-room concept that helps learners find focus partners and stay accountable.',
  'tags' => ['UX Research', 'Wireframes', 'Prototyping'],
  'year' => 2025,

  'role' => 'UX Researcher/Designer',
  'timeline' => 'Project: 6 months with S&box',
  'tools' => ['Figma', 'Google'],
  'problem' => 'Online learners struggle with accountability and distraction when studying alone.',
  'goals' => [
      'Help users find a compatible study partner or group quickly',
      'Reduce friction to schedule and join sessions',
      'Encourage focus and follow-through with simple accountability features',
  ],

  

  'process' => [
      ['title' => 'Research', 'detail' => 'Surveyed and interviewed learners to identify pain points and needs.'],
      ['title' => 'Define', 'detail' => 'Created personas and mapped key user journeys.'],
      ['title' => 'Ideate', 'detail' => 'Sketched flows and explored feature options for matching and sessions.'],
      ['title' => 'Design', 'detail' => 'Built wireframes and a clickable prototype in Figma.'],
      ['title' => 'Test', 'detail' => 'Ran quick usability tests and iterated based on feedback.'],
  ],

  'design_iterations' => [
    'User Personas derived from initial research.',
    'My moodboards for the look and feel, we decided on the simplistc look and one of the logos I sketched.',
    'I created the chat screen and created multiple iterations, my final design included just the simplistic colors.',
    'We desgined for only one user flow (Finding a match and booking a study session).'
  ],

  'outcomes' => [
      'Created a clear flow for discovering rooms, joining sessions, and staying accountable.',
      'Validated key screens through usability testing and refined navigation and labeling.',
  ],
  'next_steps' => [
      'Add onboarding to personalize matching preferences',
      'Improve moderation and safety features for group sessions',
      'Explore reminders and calendar integrations',
  ],

  // ✅ Images MUST be inside this same project array
  'images' => [
      // personas
      [
        'src' => '/images/sandbox/DarnellBio.png',
        'caption' => 'User Persona: Darnell',
      ],
      [
        'src' => '/images/sandbox/AishaBio.png',
        'caption' => 'User Persona: Aisha',
      ],
      [
        'src' => '/images/sandbox/MariaBio.png',
        'caption' => 'User Persona: Maria',
      ],

      // moodboards/design
      [
        'src' => '/images/sandbox/Moodboard/Simplistic.png',
        'caption' => 'Mood Board: Simplistic Theme',
      ],
      [
        'src' => '/images/sandbox/MoodboardSchoolHouse/Playful.png',
        'caption' => 'Mood Board: School House Theme',
      ],
      [
        'src' => '/images/sandbox/PeerSpaceLogo.png',
        'caption' => 'Logo ideas for Peer Space',
      ],

      // chat session iterations
      [
        'src' => '/images/sandbox/chatSessionPageOption1.png',
        'caption' => 'Chat session modal iteration 1',
      ],
      [
        'src' => '/images/sandbox/chatSessionPageOption2.png',
        'caption' => 'Chat session modal iteration 2',
      ],
      [
        'src' => '/images/sandbox/chatSessionPageOption3.png',
        'caption' => 'Chat session modal iteration 3',
      ],

      
  ],

  // Optional video (if you re-enable it later, use the embed link)
      
     'videos' => [
      [
          'type' => 'embed',
          'src' => 'https://www.loom.com/embed/d300bed9e06e4c2581bc092ae8f07429',
          'title' => 'Final Prototype',
      ],
    ],

],

//Google UX Design

    [
        'card_image' => '/images/work/basketball.png',
        'title' => 'Eddie Oates Basketball Training App',
        'slug' => 'google-ux',
        'summary' => 'Mobile app that helps athletes book training sessions, track progress, and stay connected with their coach.',
        'type' => 'ux',
        'year' => 2025,
        'role' => 'UX Designer, Researcher',
        'timeline' => 'Google UX Certificate Project',
        'tools' => ['Figma', 'User research', 'Usability testing'],

       'problem' => 'Student athletes and their support systems struggle to maintain effective training outside 
                    of organized practice because they lack structured workouts, clear progress tracking, and an easy-to-use experience.',
       'goals' => [
          'Provide structured, ready-to-follow training plans',
          'Motivate athletes through visible progress tracking',
          'Create a simple, parent-friendly experience',
        ],

      'process' => [
        ['title' => 'Research', 'detail' => 'Interviewed a wide range of basketball enthusiasts and guardians to understand the problems with basketball training at home and without an instructor'],
        ['title' => 'Personas', 'detail' => 'Created personas to represent each user group, athlete and parent.'],
        ['title' => 'User journey', 'detail' => 'Mapped the registration flow to determine the ease of setting up first training lesson'],
        ['title' => 'Wireframes', 'detail' => 'Built low-fidelity layouts to test structure.'],
        ['title' => 'Hi-fidelity design', 'detail' => 'Designed a clean mobile experience in Figma.'],
        ['title' => 'Usability testing', 'detail' => 'Tested with 5 users and improved navigation…'],
      ],


       'videos' => [
        

          [
          'type' => 'embed',
          'src' => 'https://embed.figma.com/proto/sCLvq7vGQaQaFx2cIpLc5j/Untitled?node-id=4-225&p=f&scaling=min-zoom&content-scaling=fixed&page-id=0%3A1&embed-host=share',
          'title' => 'LowFi',
          ],

          [
          'type' => 'embed',
          'src' => 'https://embed.figma.com/proto/sCLvq7vGQaQaFx2cIpLc5j/Untitled?node-id=4-4614&starting-point-node-id=4%3A4614&embed-host=share',
          'title' => 'Mid-Fi:New Working on a new design system for this with better scale, spacing and a better color story.',
          ],
      ], 

      'images' => [
        [
          'src' =>  '/images/googleux/research.png',
          'caption' => 'User research Results',
      ],
      [
          'src' => '/images/googleux/personas.png',
          'caption' => 'User Personas created from User research',
      ], 
      [
          'src' => '/images/googleux/userflow.png',
          'caption' => 'Mapped registration userflow',
        ],
        [
          'src' => '/images/googleux/testing.png',
          'caption' => 'Usability Testing'
        ], 

         [
          'src' => '/images/googleux/wireframe1.png',
          'caption' => 'Wireframes'
        ],
        
         [
          'src' => '/images/googleux/wireframe2.png',
          'caption' => 'Wireframes'
        ], 
        
        

    ],

      'outcomes' => [
        'Realized that users needed onboarding for ease of setup',
        'Created tiered subscription levels based on onboarding answers',
        'Improved clarity of navigation labels',
      ],

      'next_steps' => [
          'Add progress tracking dashboard',
          'Introduce push reminders for sessions',
          'Validate with real athletes and coaches',
        ],

      
  ],
];