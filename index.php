<?php
$success = isset($_GET['success']) && $_GET['success'] === '1';
$error = isset($_GET['error']) ? htmlspecialchars($_GET['error']) : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AKIFA Hair Oil | Natural Hair Growth Care</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            akifaGreen: '#2F5D3A',
            akifaOlive: '#A8C63F',
            akifaText: '#1C1C1C',
            akifaSoft: '#F2F2F2',
            akifaIcon: '#B7D77A'
          }
        }
      }
    }
  </script>
</head>
<body class="bg-white text-akifaText antialiased">
  <header class="sticky top-0 z-50 bg-white/95 backdrop-blur border-b border-gray-100">
    <nav class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 md:px-6">
      <a href="#" class="text-2xl font-bold text-akifaGreen">AKIFA</a>
      <button id="menuToggle" class="md:hidden rounded p-2 text-akifaGreen" aria-label="Toggle menu">☰</button>
      <ul id="mobileMenu" class="hidden md:flex md:items-center md:gap-8">
        <li><a href="#benefits" class="hover:text-akifaGreen">Benefits</a></li>
        <li><a href="#ingredients" class="hover:text-akifaGreen">Ingredients</a></li>
        <li><a href="#testimonials" class="hover:text-akifaGreen">Testimonials</a></li>
        <li><a href="#order" class="rounded-md bg-akifaOlive px-5 py-2 font-semibold text-akifaText hover:bg-lime-600 hover:text-white">Buy Now</a></li>
      </ul>
    </nav>
    <ul id="mobileMenuPanel" class="hidden space-y-2 border-t border-gray-100 px-4 pb-4 md:hidden">
      <li><a href="#benefits" class="block rounded px-3 py-2 hover:bg-akifaSoft">Benefits</a></li>
      <li><a href="#ingredients" class="block rounded px-3 py-2 hover:bg-akifaSoft">Ingredients</a></li>
      <li><a href="#testimonials" class="block rounded px-3 py-2 hover:bg-akifaSoft">Testimonials</a></li>
      <li><a href="#order" class="block rounded bg-akifaOlive px-3 py-2 font-semibold">Buy Now</a></li>
    </ul>
  </header>

  <main>
    <section class="mx-auto grid max-w-6xl items-center gap-10 px-4 py-16 md:grid-cols-2 md:px-6 md:py-24">
      <div>
        <p class="mb-3 inline-block rounded-full bg-akifaSoft px-4 py-1 text-sm font-semibold text-akifaGreen">100% Herbal Formula</p>
        <h1 class="text-4xl font-bold leading-tight text-akifaGreen md:text-5xl">Thick, Smooth &amp; Vibrant Hair Naturally</h1>
        <p class="mt-5 max-w-xl text-lg">AKIFA Hair Oil blends trusted herbal ingredients to reduce hair fall, improve scalp health, and support faster natural growth.</p>
        <div class="mt-8 flex flex-wrap gap-4">
          <a href="#order" class="rounded-lg bg-akifaOlive px-8 py-3 font-semibold text-akifaText transition hover:bg-[#556B2F] hover:text-white">Shop Now</a>
          <a href="#benefits" class="rounded-lg border border-akifaGreen px-8 py-3 font-semibold text-akifaGreen hover:bg-akifaGreen hover:text-white">See Benefits</a>
        </div>
      </div>
      <div class="flex justify-center">
        <img src="https://landing.sitenin.com/wp-content/uploads/2025/07/akifa-hair-oil-demo.jpg" onerror="this.src='https://images.unsplash.com/photo-1610450949065-1f2841536c88?auto=format&fit=crop&w=700&q=80'" alt="AKIFA Hair Oil Bottle" class="w-full max-w-md rounded-2xl shadow-2xl" />
      </div>
    </section>

    <section id="benefits" class="bg-akifaSoft py-16 md:py-20">
      <div class="mx-auto max-w-6xl px-4 md:px-6">
        <h2 class="text-center text-3xl font-bold text-akifaGreen md:text-4xl">Why Your Hair Will Love AKIFA</h2>
        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
          <article class="rounded-xl bg-white p-6 text-center shadow-sm">
            <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-akifaIcon text-2xl text-akifaGreen">✓</div>
            <h3 class="font-semibold text-akifaGreen">Reduces Hair Fall</h3>
          </article>
          <article class="rounded-xl bg-white p-6 text-center shadow-sm">
            <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-akifaIcon text-2xl text-akifaGreen">⚡</div>
            <h3 class="font-semibold text-akifaGreen">Promotes Faster Growth</h3>
          </article>
          <article class="rounded-xl bg-white p-6 text-center shadow-sm">
            <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-akifaIcon text-2xl text-akifaGreen">🌿</div>
            <h3 class="font-semibold text-akifaGreen">Strengthens Roots</h3>
          </article>
          <article class="rounded-xl bg-white p-6 text-center shadow-sm">
            <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-akifaIcon text-2xl text-akifaGreen">✨</div>
            <h3 class="font-semibold text-akifaGreen">Adds Natural Shine</h3>
          </article>
        </div>
      </div>
    </section>

    <section id="ingredients" class="bg-gradient-to-r from-white to-[#B7D77A]/50 py-16 md:py-20">
      <div class="mx-auto grid max-w-6xl items-center gap-8 px-4 md:grid-cols-2 md:px-6">
        <img src="https://images.unsplash.com/photo-1471193945509-9ad0617afabf?auto=format&fit=crop&w=900&q=80" alt="Natural ingredients" class="h-full min-h-[320px] w-full rounded-2xl object-cover shadow-lg" />
        <div>
          <h2 class="text-3xl font-bold text-akifaGreen md:text-4xl">Powered by Natural Ingredients</h2>
          <p class="mt-4 text-lg">Every bottle contains a carefully balanced mix of herbal oils that nourish scalp and hair from root to tip.</p>
          <ul class="mt-6 space-y-3">
            <li><span class="font-semibold text-akifaOlive">Amla Extract:</span> Improves hair texture and supports strong follicles.</li>
            <li><span class="font-semibold text-akifaOlive">Coconut Oil:</span> Deep hydration to prevent dryness and breakage.</li>
            <li><span class="font-semibold text-akifaOlive">Onion Seed:</span> Boosts circulation and encourages healthier growth.</li>
            <li><span class="font-semibold text-akifaOlive">Fenugreek:</span> Helps reduce dandruff and soothes scalp irritation.</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="py-16 md:py-20">
      <div class="mx-auto max-w-6xl px-4 md:px-6">
        <h2 class="text-center text-3xl font-bold text-akifaGreen md:text-4xl">Why Choose Us</h2>
        <div class="mt-10 grid gap-6 md:grid-cols-3">
          <article class="rounded-xl border-b-4 border-akifaOlive bg-akifaSoft p-7">
            <h3 class="text-xl font-semibold text-akifaGreen">Trusted Herbal Formula</h3>
            <p class="mt-3">No harsh chemicals. Made with tested herbal ingredients safe for regular use.</p>
          </article>
          <article class="rounded-xl border-b-4 border-akifaOlive bg-akifaSoft p-7">
            <h3 class="text-xl font-semibold text-akifaGreen">Visible Results</h3>
            <p class="mt-3">Many users notice less hair fall and improved shine within a few weeks.</p>
          </article>
          <article class="rounded-xl border-b-4 border-akifaOlive bg-akifaSoft p-7">
            <h3 class="text-xl font-semibold text-akifaGreen">Made for Bangladeshi Climate</h3>
            <p class="mt-3">Lightweight, non-sticky finish that works well in humid weather.</p>
          </article>
        </div>
      </div>
    </section>

    <section id="testimonials" class="bg-akifaGreen py-16 text-white md:py-20">
      <div class="mx-auto max-w-6xl px-4 text-center md:px-6">
        <h2 class="text-3xl font-bold md:text-4xl">Real Customer Feedback</h2>
        <div class="mt-10 grid gap-6 md:grid-cols-3">
          <article class="rounded-xl bg-white/10 p-6">
            <p class="text-akifaOlive">★★★★★</p>
            <p class="mt-3">“2 weeks use korar por hair fall onek komse. Hair soft o shiny lagche.”</p>
            <p class="mt-4 font-semibold">— Tasnia, Dhaka</p>
          </article>
          <article class="rounded-xl bg-white/10 p-6">
            <p class="text-akifaOlive">★★★★★</p>
            <p class="mt-3">“Amar scalp dryness komse and new baby hair ashche. Highly recommended.”</p>
            <p class="mt-4 font-semibold">— Rifat, Chattogram</p>
          </article>
          <article class="rounded-xl bg-white/10 p-6">
            <p class="text-akifaOlive">★★★★★</p>
            <p class="mt-3">“Non-sticky and nice smell. Ami regular use kortesi.”</p>
            <p class="mt-4 font-semibold">— Nabila, Sylhet</p>
          </article>
        </div>
      </div>
    </section>

    <section id="order" class="bg-akifaOlive py-16 md:py-20">
      <div class="mx-auto max-w-3xl px-4 text-center md:px-6">
        <h2 class="text-3xl font-bold text-akifaText md:text-4xl">Start Your Hair Transformation Today</h2>
        <p class="mt-3 text-lg">Place your order now and get home delivery anywhere in Bangladesh.</p>

        <?php if ($success): ?>
          <p class="mt-6 rounded-lg bg-green-100 px-4 py-3 font-semibold text-green-800">Thanks! Your order request was submitted successfully.</p>
        <?php endif; ?>
        <?php if ($error): ?>
          <p class="mt-6 rounded-lg bg-red-100 px-4 py-3 font-semibold text-red-800">Order failed: <?= $error ?></p>
        <?php endif; ?>

        <form action="submit_order.php" method="POST" class="mx-auto mt-8 grid gap-4 rounded-2xl bg-white p-6 text-left shadow-xl md:grid-cols-2">
          <div>
            <label for="name" class="mb-1 block text-sm font-semibold">Full Name</label>
            <input id="name" name="name" required class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-akifaGreen focus:outline-none" />
          </div>
          <div>
            <label for="phone" class="mb-1 block text-sm font-semibold">Phone Number</label>
            <input id="phone" name="phone" required class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-akifaGreen focus:outline-none" />
          </div>
          <div class="md:col-span-2">
            <label for="address" class="mb-1 block text-sm font-semibold">Delivery Address</label>
            <textarea id="address" name="address" rows="3" required class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-akifaGreen focus:outline-none"></textarea>
          </div>
          <div>
            <label for="quantity" class="mb-1 block text-sm font-semibold">Quantity</label>
            <select id="quantity" name="quantity" class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-akifaGreen focus:outline-none">
              <option value="1">1 Bottle</option>
              <option value="2">2 Bottles</option>
              <option value="3">3 Bottles</option>
            </select>
          </div>
          <div class="flex items-end">
            <button class="w-full rounded-lg bg-akifaGreen px-6 py-3 font-semibold text-white transition hover:bg-green-900">Order Now</button>
          </div>
        </form>
      </div>
    </section>
  </main>

  <footer class="bg-white py-6 text-center text-sm text-gray-600">© <?php echo date('Y'); ?> AKIFA Hair Oil. All rights reserved.</footer>

  <script>
    const toggle = document.getElementById('menuToggle');
    const panel = document.getElementById('mobileMenuPanel');

    toggle.addEventListener('click', () => {
      panel.classList.toggle('hidden');
    });

    document.querySelectorAll('a[href^="#"]').forEach((link) => {
      link.addEventListener('click', () => {
        panel.classList.add('hidden');
      });
    });
  </script>
</body>
</html>
