<x-guest-layout>
    <div class="max-w-7xl mx-auto dark:text-white text-black text-center min-h-screen">
        <x-application-logo class="block py-8 h-9 w-auto mx-auto text-center fill-current text-gray-800 dark:text-gray-200" />
        <h1 class="md:text-9xl text-4xl uppercase text-center my-1 font-bold py-6">Rephish</h1>
        <p class="py-2">
            We strive to empower organisations and individuals to protect themselves from the escalating threat of phishing attacks.
            Our platform provides a comprehensive set of tools and resources to simulate phishing attacks, educate users about these threats,
            and raise awareness about cybersecurity best practices.
            With Rephish, you can create customized phishing campaigns, track user engagement, and analyze the effectiveness of your security measures.
            We believe that by working together, we can create a more secure and resilient digital environment for all people.
        </p>
        <div class="py-8">
            <a href="/login">
                <x-primary-button>Get started</x-primary-button>
            </a>
            <a href="/register">
                <x-primary-button>Signup Now</x-primary-button>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-8">
            <x-panel>
                <h2 class="bold py-2">What is a Phishing Simulation?</h2>
                <p>Phishing simulations are imitations of real-world phishing emails organizations can send to employees to test online behavior and assess knowledge levels regarding phishing attacks. The emails mirror cyber threats professionals may encounter in their daily activities, both during and outside work hours.</p>
            </x-panel>

            <x-panel>
                <h2 class="bold py-2">What is the Purpose of a Phishing Simulation?</h2>
                <p>Phishing simulations ensure your employees can detect and avoid cyber threats like phishing, social engineering, ransomware, and others. These interactive phishing tests can be part of any security awareness training program, facilitating the process of reducing risk, building threat resilience, and creating a security-aware organizational culture.</p>
            </x-panel>
        </div>
    </div>
</x-guest-layout>
