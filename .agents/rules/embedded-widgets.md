# Third-Party Widget & Section Layout Guardrails

## 1. Do Not Inject Raw External Scripts Directly in Page Templates
- Never drop uncontained `<script>` tags, third-party iframe embeds, or unstructured vendor `<div>` blocks directly into top-level blade views (e.g. `home.blade.php`).
- Always encapsulate third-party widgets in a dedicated Blade component under `resources/views/components/...` (e.g. `<x-home.weather-ticker />`).

## 2. Layout & Responsive Containment
- Every section or widget inserted on a landing or guest page must adhere to standard layout containment (e.g. `max-w-7xl mx-auto px-4 sm:px-6 lg:px-8`).
- Maintain uniform horizontal alignment with neighboring panels to avoid horizontal scrolling, jarring layout shifts (CLS), and margin breaks.

## 3. Contextual Branding & Badges
- When rendering third-party utility widgets (e.g., weather feeds, exchange rates, maps), provide a contextual banner, icon, or heading matching the provincial design theme so the widget does not look out of place or spammy.

## 4. Carousel / Dynamic Media Readability
- Hero carousel and automatic sliders must allow adequate reading time: minimum 5,000ms–6,000ms per slide before transitioning, and must support `@mouseenter="stopAutoplay()"` and `@mouseleave="startAutoplay()"` for accessibility.
