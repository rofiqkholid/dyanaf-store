<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    /**
     * List of animal names for random display names
     */
    private array $animalNames = [
        'Tiger',
        'Lion',
        'Elephant',
        'Giraffe',
        'Zebra',
        'Panda',
        'Koala',
        'Kangaroo',
        'Dolphin',
        'Whale',
        'Eagle',
        'Hawk',
        'Falcon',
        'Owl',
        'Penguin',
        'Flamingo',
        'Bear',
        'Wolf',
        'Fox',
        'Rabbit',
        'Deer',
        'Moose',
        'Buffalo',
        'Rhino',
        'Hippo',
        'Crocodile',
        'Turtle',
        'Snake',
        'Frog',
        'Butterfly',
        'Dragonfly',
        'Parrot',
        'Peacock',
        'Swan',
        'Duck',
        'Goose',
        'Chicken',
        'Rooster',
        'Horse',
        'Donkey',
        'Camel',
        'Llama',
        'Alpaca',
        'Sheep',
        'Goat',
        'Pig',
        'Cheetah',
        'Leopard',
        'Jaguar',
        'Panther',
        'Cougar',
        'Lynx',
        'Bobcat',
        'Gorilla',
        'Chimp',
        'Orangutan',
        'Baboon',
        'Lemur',
        'Meerkat',
        'Otter',
        'Seal',
        'Walrus',
        'Shark',
        'Octopus',
        'Squid',
        'Jellyfish',
        'Starfish',
        'Crab',
        'Lobster',
        'Shrimp',
        'Clam',
        'Oyster',
        'Snail',
        'Beetle',
        'Ant',
        'Bee',
        'Wasp',
        'Spider',
        'Scorpion',
        'Centipede',
        'Caterpillar',
        'Moth'
    ];

    /**
     * Show login page
     */
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('chat');
        }

        return view('auth.login');
    }

    /**
     * Redirect to Google OAuth
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle Google OAuth callback
     */
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Find or create user
            $user = User::where('google_id', $googleUser->getId())->first();

            if (!$user) {
                // Check if user with same email exists
                $user = User::where('email', $googleUser->getEmail())->first();

                if ($user) {
                    // Link Google account to existing user
                    $user->update([
                        'google_id' => $googleUser->getId(),
                        'avatar' => $googleUser->getAvatar(),
                        'chat_display_name' => $this->generateAnimalName(),
                    ]);
                } else {
                    // Create new user
                    $user = User::create([
                        'name' => $googleUser->getName(),
                        'email' => $googleUser->getEmail(),
                        'google_id' => $googleUser->getId(),
                        'avatar' => $googleUser->getAvatar(),
                        'chat_display_name' => $this->generateAnimalName(),
                        'password' => null,
                    ]);
                }
            }

            Auth::login($user, true);

            return redirect()->route('chat');
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Gagal login dengan Google. Silakan coba lagi.');
        }
    }

    /**
     * Logout user
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    /**
     * Generate random animal name
     */
    private function generateAnimalName(): string
    {
        return $this->animalNames[array_rand($this->animalNames)] . rand(100, 999);
    }
}
