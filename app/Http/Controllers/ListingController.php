<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function generateDescription(Request $request)
    {
        $title = $request->input('title');

        // Generate description using OpenAI GPT-3 API
        $description = $this->generateDescriptionUsingOpenAI($title);

        return response()->json(['description' => $description]);
    }

    private function generateDescriptionUsingOpenAI($title)
    {
        $openai = new OpenAI();
        $prompt = "Generate a listing description for a product with the title: \"$title\"";

        // Adjust the parameters based on your requirements
        $response = $openai->complete([
            'prompt' => $prompt,
            'max_tokens' => 100,
            'temperature' => 0.7,
        ]);

        return $response['choices'][0]['text'];
    }
}
