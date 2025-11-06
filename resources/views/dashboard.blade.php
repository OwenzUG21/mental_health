<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    {{-- </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
            </div>
        </div>
    </div> --}}

    {{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('WellMind Admin Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Sidebar + Dashboard Content --}}
            <div class="flex flex-col lg:flex-row gap-6">

                {{-- Sidebar --}}
                <div class="bg-gradient-to-b from-blue-300 to-blue-100 text-blue-900 rounded-2xl p-5 shadow-md w-full lg:w-64">
                    <h4 class="text-center font-bold text-xl mb-6">MUBS ADMIN</h4>
                    <nav class="flex flex-col space-y-2">
                        <button onclick="showSection('testimonials', this)" class="active sidebar-btn py-2 px-3 rounded-lg text-left hover:bg-blue-200 font-medium transition">Testimonials</button>
                        <button onclick="showSection('messages', this)" class="sidebar-btn py-2 px-3 rounded-lg text-left hover:bg-blue-200 font-medium transition">Messages</button>
                        <button onclick="showSection('settings', this)" class="sidebar-btn py-2 px-3 rounded-lg text-left hover:bg-blue-200 font-medium transition">Settings</button>
                        <button class="bg-red-500 text-white mt-auto rounded-lg py-2 px-3 font-semibold hover:bg-red-600">Logout</button>
                    </nav>
                </div>

                {{-- Main Content --}}
                <div class="flex-1 bg-white rounded-2xl p-6 shadow-md">

                    {{-- Testimonials Section --}}
                    <div id="testimonials" class="fade-section">
                        <h3 class="text-2xl font-bold text-blue-800 mb-4">Testimonials</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full border border-gray-200 rounded-lg">
                                <thead class="bg-blue-900 text-white">
                                    <tr>
                                        <th class="px-4 py-2">#</th>
                                        <th class="px-4 py-2">Name</th>
                                        <th class="px-4 py-2">Testimonial</th>
                                        <th class="px-4 py-2">Rating</th>
                                        <th class="px-4 py-2">Status</th>
                                        <th class="px-4 py-2">Date</th>
                                        <th class="px-4 py-2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700">
                                    <tr class="border-t">
                                        <td class="px-4 py-2">1</td>
                                        <td class="px-4 py-2">Jane Doe</td>
                                        <td class="px-4 py-2">This platform helped me manage my anxiety better!</td>
                                        <td class="px-4 py-2">⭐⭐⭐⭐⭐</td>
                                        <td class="px-4 py-2"><span class="bg-green-200 text-green-800 px-2 py-1 rounded-md text-sm font-medium">Approved</span></td>
                                        <td class="px-4 py-2">2025-10-10</td>
                                        <td class="px-4 py-2 space-x-2">
                                            <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-md text-sm">Edit</button>
                                            <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- Messages Section --}}
                    <div id="messages" class="fade-section hidden">
                        <h3 class="text-2xl font-bold text-blue-800 mb-4">Messages</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full border border-gray-200 rounded-lg">
                                <thead class="bg-blue-900 text-white">
                                    <tr>
                                        <th class="px-4 py-2">#</th>
                                        <th class="px-4 py-2">Sender</th>
                                        <th class="px-4 py-2">Email</th>
                                        <th class="px-4 py-2">Subject</th>
                                        <th class="px-4 py-2">Message</th>
                                        <th class="px-4 py-2">Status</th>
                                        <th class="px-4 py-2">Date</th>
                                        <th class="px-4 py-2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700">
                                    <tr class="border-t">
                                        <td class="px-4 py-2">1</td>
                                        <td class="px-4 py-2">John Smith</td>
                                        <td class="px-4 py-2">john@example.com</td>
                                        <td class="px-4 py-2">Therapy Inquiry</td>
                                        <td class="px-4 py-2">I’d love to know more about therapy sessions.</td>
                                        <td class="px-4 py-2"><span class="bg-gray-300 text-gray-800 px-2 py-1 rounded-md text-sm">Unread</span></td>
                                        <td class="px-4 py-2">2025-10-20</td>
                                        <td class="px-4 py-2 space-x-2">
                                            <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-md text-sm">Mark Read</button>
                                            <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- Settings Section --}}
                    <div id="settings" class="fade-section hidden">
                        <h3 class="text-2xl font-bold text-blue-800 mb-4">Settings</h3>
                        <form class="space-y-4">
                            <div class="text-center">
                                <img src="https://via.placeholder.com/100" alt="Profile" id="preview-img" class="w-24 h-24 mx-auto rounded-full border-4 border-blue-500 object-cover mb-3">
                                <input type="file" id="profile-upload" accept="image/*" class="block mx-auto text-sm text-gray-600" />
                            </div>

                            <div>
                                <label class="font-semibold">Admin Name</label>
                                <input type="text" class="w-full border rounded-lg p-2" placeholder="Enter your name" />
                            </div>
                            <div>
                                <label class="font-semibold">Email</label>
                                <input type="email" class="w-full border rounded-lg p-2" placeholder="Enter your email" />
                            </div>
                            <div>
                                <label class="font-semibold">Contact Number</label>
                                <input type="tel" class="w-full border rounded-lg p-2" placeholder="Enter contact number" />
                            </div>
                            <div>
                                <label class="font-semibold">Bio / Description</label>
                                <textarea class="w-full border rounded-lg p-2" rows="3" placeholder="Write something about yourself..."></textarea>
                            </div>
                            <div class="flex items-center space-x-2">
                                <input id="darkModeToggle" type="checkbox" class="h-5 w-5 border-gray-300 rounded">
                                <label for="darkModeToggle" class="font-semibold">Enable Dark Mode</label>
                            </div>
                            <div>
                                <label class="font-semibold">Password</label>
                                <input type="password" class="w-full border rounded-lg p-2" placeholder="Enter new password" />
                            </div>
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg">Save Changes</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- JS --}}
    <script>
        function showSection(id, btn) {
            document.querySelectorAll('#testimonials, #messages, #settings').forEach(sec => sec.classList.add('hidden'));
            document.getElementById(id).classList.remove('hidden');

            document.querySelectorAll('.sidebar-btn').forEach(b => b.classList.remove('bg-blue-200'));
            btn.classList.add('bg-blue-200');
        }

        // Image preview
        document.getElementById('profile-upload').addEventListener('change', e => {
            const file = e.target.files[0];
            if (file) document.getElementById('preview-img').src = URL.createObjectURL(file);
        });

        // Dark mode toggle
        document.getElementById('darkModeToggle').addEventListener('change', e => {
            document.documentElement.classList.toggle('dark', e.target.checked);
        });
    </script>
{{-- </x-app-layout> --}}

</x-app-layout>
