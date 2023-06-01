// service-worker.js

// Evento de instalación
self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open('kche').then(function(cache) {
      return cache.addAll([
        '/',
        '/build/css/app.css',
        '/build/js/bundle.min.js',
        // Agrega otros activos que desees almacenar en caché
      ]);
    })
  );
});

// Evento de recuperación
self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request).then(function(response) {
      return response || fetch(event.request);
    })
  );
});
