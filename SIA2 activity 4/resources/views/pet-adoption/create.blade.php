<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🐾 Pet Adoption Application</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-purple-50 to-pink-50 min-h-screen">
    <div class="container mx-auto px-4 py-12 max-w-2xl">
        <!-- Header -->
        <div class="text-center mb-12">
            <div class="w-24 h-24 bg-gradient-to-r from-pink-400 to-purple-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                <span class="text-4xl">🐾</span>
            </div>
            <h1 class="text-4xl font-bold bg-gradient-to-r from-pink-600 to-purple-600 bg-clip-text text-transparent mb-4">
                Pet Adoption Application
            </h1>
            <p class="text-gray-600 text-lg">Find your forever friend today!</p>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg mb-8 animate-pulse">
                {{ session('success') }}
            </div>
        @endif

        <!-- Errors Summary -->
        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-800 px-6 py-4 rounded-lg mb-8">
                <h3 class="font-semibold mb-2">Please fix the following errors:</h3>
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form method="POST" action="/pet-adoption" class="space-y-6...">
            @csrf

            <!-- Full Name -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
                <input type="text" name="full_name" value="{{ old('full_name') }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all @error('full_name') border-red-500 @enderror"
                       placeholder="John Doe">
                @error('full_name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                <input type="email" name="email" value="{{ old('email') }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all @error('email') border-red-500 @enderror"
                       placeholder="john@example.com">
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Phone Input -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number * (11 digits)</label>
                <input type="tel" name="phone" value="{{ old('phone') }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all @error('phone') border-red-500 @enderror"
                    placeholder="09876543212"
                    maxlength="11" pattern="[0-9]{11}">  <!-- ✅ Added restrictions -->
                @error('phone')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Experience Years -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Pet Care Experience (Years) *</label>
                <input type="number" name="experience_years" value="{{ old('experience_years') }}" min="0" max="50"
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all @error('experience_years') border-red-500 @enderror"
                       placeholder="0">
                @error('experience_years')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Pet Preference -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Pet Preference *</label>
                <select name="pet_preference"
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all @error('pet_preference') border-red-500 @enderror">
                    <option value="">Select your preference</option>
                    <option value="dog" {{ old('pet_preference') == 'dog' ? 'selected' : '' }}>🐶 Dog</option>
                    <option value="cat" {{ old('pet_preference') == 'cat' ? 'selected' : '' }}>🐱 Cat</option>
                    <option value="both" {{ old('pet_preference') == 'both' ? 'selected' : '' }}>Both</option>
                </select>
                @error('pet_preference')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Address -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Home Address *</label>
                <input type="text" name="address" value="{{ old('address') }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all @error('address') border-red-500 @enderror"
                       placeholder="123 Pet Street, Petville, PV 12345">
                @error('address')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Motivation -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Why do you want to adopt? * (min 10 characters)</label>
                <textarea name="motivation" rows="4"
                          class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all @error('motivation') border-red-500 @enderror"
                          placeholder="Tell us about your motivation to adopt a pet...">{{ old('motivation') }}</textarea>
                @error('motivation')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit"
                    class="w-full bg-gradient-to-r from-pink-500 to-purple-600 text-white font-semibold py-4 px-8 rounded-xl shadow-lg hover:from-pink-600 hover:to-purple-700 transform hover:scale-105 transition-all duration-200 text-lg">
                🐾 Submit Adoption Application
            </button>
        </form>

        <!-- Footer -->
        <div class="text-center mt-12 text-gray-500">
            <p>Ready to give a pet a forever home? Fill out the form above! 🏠❤️</p>
        </div>
    </div>
</body>
</html>