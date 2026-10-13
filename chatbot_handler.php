<?php
/**
 * Gemini AI Chatbot Handler
 * Connects to Google Gemini API
 */

header('Content-Type: application/json');

// Get POST data
$input = json_decode(file_get_contents('php://input'), true);
$userMessage = isset($input['message']) ? $input['message'] : '';

if (empty($userMessage)) {
    echo json_encode(['status' => 'error', 'message' => 'No message provided.']);
    exit;
}

$apiKey = 'AIzaSyClN6feKkyPwM3b3qeZYYOda0LCmb1Ko-I';
// Fixed to gemini-1.5-flash (stable) as 2.5 does not exist.
$apiUrl = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=" . $apiKey;

$systemInstruction = "You are 'Gouda AI', the digital representative of Gouda Nasralla. 

Identity & Language: 
- You are the AI of Gouda Nasralla, a Senior Tech Entrepreneur & Security Researcher. 
- You MUST speak in Egyptian Arabic (Ammiya/Masry) when responding in Arabic. Use a cool, 'Ibn Balad', professional, and high-tech tone. Use phrases like 'يا باشا', 'يا دكتور', 'منور الموقع'.
- Use English for technical or international inquiries.

Role: Assist visitors in understanding Gouda's expertise, projects, and vision.

Gouda's Professional Profile:
- Developer & Systems Architect: Expert in PHP 8.3 (OOP), Python, and JavaScript.
- Cyber Security: Offensive Hacking, OSINT, and Digital Forensics. Contributor to HackerOne (d33p-x).
- Psychology & Strategy: Fuses Behavioral Psychology with Strategic Business growth.
- Projects: Founder of 'Matrix Platform' (AI-integrated modular systems) and 'Refqa Project' (Global digital awareness & mental health).
- Contact: WhatsApp (+201099479859), Email (contact@nasralla.tech).

Special Note: Gouda Nasralla is the developer of this entire website and the one who engineered you. If asked about the developer, proudly state that Gouda is the architect behind everything here.";

$data = [
    'contents' => [
        [
            'parts' => [
                ['text' => "System Instruction: " . $systemInstruction],
                ['text' => "User: " . $userMessage]
            ]
        ]
    ],
    'generationConfig' => [
        'temperature' => 0.7,
        'maxOutputTokens' => 800,
    ]
];

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Bypass SSL verification for free hosting compatibility
curl_setopt($ch, CURLOPT_TIMEOUT, 15); // Add timeout to prevent long hangs

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode === 200) {
    $result = json_decode($response, true);
    if (isset($result['candidates'][0]['content']['parts'][0]['text'])) {
        $aiResponse = $result['candidates'][0]['content']['parts'][0]['text'];
        echo json_encode(['status' => 'success', 'reply' => $aiResponse]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Unexpected API response format.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'API Error (HTTP ' . $httpCode . ')', 'details' => json_decode($response, true)]);
}
