<script>
    document.addEventListener("DOMContentLoaded", () => {
        setTimeout(() => {
            if (window.Alpine && window.Alpine.store("sidebar")) {
                window.Alpine.store("sidebar").close();
            }
        }, 50);
    });

    document.addEventListener("livewire:navigating", () => {
        if (window.Alpine && window.Alpine.store("sidebar")) {
            window.Alpine.store("sidebar").close();
        }
    });
</script>

