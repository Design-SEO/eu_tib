document.addEventListener('DOMContentLoaded', () => {
    const rotators = document.querySelectorAll('.word-rotator');


    rotators.forEach(rotator => {
        const wordsContainer = rotator.querySelector('.word-rotator-words');
        if (!wordsContainer) return;

        const words = [...wordsContainer.querySelectorAll('b')];
        if (words.length < 2) return; // меньше 2 слов — нечего крутить

        let currentIndex = words.findIndex(w => w.classList.contains('is-visible'));
        if (currentIndex === -1) {
            currentIndex = 0;
            words[0].classList.add('is-visible');
        }

        const intervalTime = 2800; // можно настроить: пауза между сменами (мс)

        const changeWord = () => {
            const current = words[currentIndex];
            current.classList.remove('is-visible');
            current.classList.add('is-hidden'); // для эффектов ухода, если есть

            // Следующий индекс
            currentIndex = (currentIndex + 1) % words.length;

            const next = words[currentIndex];
            next.classList.remove('is-hidden');
            next.classList.add('is-visible');

            // Убираем is-hidden через время анимации
            setTimeout(() => {
                current.classList.remove('is-hidden');
            }, 1200); // должно быть ≈ длительности самой анимации
        };

        // Запускаем цикл
        const intervalId = setInterval(changeWord, intervalTime);

        // Опционально: остановка при уходе со страницы/скрытии
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                clearInterval(intervalId);
            } else {
                // можно перезапустить
            }
        });
    });
});