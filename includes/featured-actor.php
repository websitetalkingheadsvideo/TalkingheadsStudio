<?php
// Featured Actor/Spokesperson Management
// This file manages featured actors and spokespersons for the website

class FeaturedActor {
    private $actors = [];
    
    public function __construct() {
        // Initialize with sample actors - in production, this would come from a database
        $this->actors = [
            [
                'id' => 1,
                'name' => 'Sarah Johnson',
                'title' => 'Professional Spokesperson',
                'bio' => 'Sarah brings warmth and authenticity to every video project. With over 5 years of experience in video production, she specializes in making complex topics accessible and engaging.',
                'image' => 'images/actors/sarah-johnson.webp',
                'specialties' => ['Business Presentations', 'Product Demos', 'Educational Content'],
                'available' => true
            ],
            [
                'id' => 2,
                'name' => 'Michael Chen',
                'title' => 'Corporate Spokesperson',
                'bio' => 'Michael delivers professional, trustworthy presentations that build credibility for your brand. His corporate background makes him perfect for B2B and enterprise videos.',
                'image' => 'images/actors/michael-chen.webp',
                'specialties' => ['Corporate Communications', 'Technical Demos', 'Training Videos'],
                'available' => true
            ],
            [
                'id' => 3,
                'name' => 'Emily Rodriguez',
                'title' => 'Friendly Spokesperson',
                'bio' => 'Emily\'s approachable style and genuine smile make her perfect for consumer-facing videos. She excels at creating emotional connections with audiences.',
                'image' => 'images/actors/emily-rodriguez.webp',
                'specialties' => ['Consumer Products', 'Healthcare', 'Non-Profit'],
                'available' => true
            ]
        ];
    }
    
    public function getFeaturedActor($id = null) {
        if ($id === null) {
            // Return the first available actor as featured
            foreach ($this->actors as $actor) {
                if ($actor['available']) {
                    return $actor;
                }
            }
        }
        
        // Return specific actor by ID
        foreach ($this->actors as $actor) {
            if ($actor['id'] == $id && $actor['available']) {
                return $actor;
            }
        }
        
        return null;
    }
    
    public function getAllActors() {
        return array_filter($this->actors, function($actor) {
            return $actor['available'];
        });
    }
    
    public function getActorsBySpecialty($specialty) {
        return array_filter($this->actors, function($actor) use ($specialty) {
            return $actor['available'] && in_array($specialty, $actor['specialties']);
        });
    }
}

// Helper function to display actor card
function displayActorCard($actor, $showBio = true) {
    if (!$actor) return '';
    
    $html = '<div class="actor-card card h-100 border-0 shadow-sm">';
    $html .= '<div class="card-body text-center">';
    $html .= '<img src="' . $actor['image'] . '" alt="' . htmlspecialchars($actor['name']) . ' - ' . htmlspecialchars($actor['title']) . '" class="rounded-circle mb-3" width="120" height="120" style="object-fit: cover;">';
    $html .= '<h5 class="card-title text-warm-gold">' . htmlspecialchars($actor['name']) . '</h5>';
    $html .= '<p class="card-text text-muted">' . htmlspecialchars($actor['title']) . '</p>';
    
    if ($showBio) {
        $html .= '<p class="card-text">' . htmlspecialchars($actor['bio']) . '</p>';
    }
    
    if (!empty($actor['specialties'])) {
        $html .= '<div class="specialties">';
        $html .= '<h6 class="text-warm-gold mb-2">Specialties:</h6>';
        $html .= '<div class="d-flex flex-wrap justify-content-center gap-2">';
        foreach ($actor['specialties'] as $specialty) {
            $html .= '<span class="badge bg-light text-dark">' . htmlspecialchars($specialty) . '</span>';
        }
        $html .= '</div>';
        $html .= '</div>';
    }
    
    $html .= '</div>';
    $html .= '</div>';
    
    return $html;
}

// Helper function to display actor selection for contact form
function displayActorSelection($selectedId = null) {
    $featuredActor = new FeaturedActor();
    $actors = $featuredActor->getAllActors();
    
    $html = '<div class="mb-3">';
    $html .= '<label for="preferred_actor" class="form-label">Preferred Spokesperson (Optional)</label>';
    $html .= '<select class="form-select" id="preferred_actor" name="preferred_actor">';
    $html .= '<option value="">No Preference</option>';
    
    foreach ($actors as $actor) {
        $selected = ($selectedId == $actor['id']) ? 'selected' : '';
        $html .= '<option value="' . $actor['id'] . '" ' . $selected . '>' . htmlspecialchars($actor['name']) . ' - ' . htmlspecialchars($actor['title']) . '</option>';
    }
    
    $html .= '</select>';
    $html .= '</div>';
    
    return $html;
}
?>
