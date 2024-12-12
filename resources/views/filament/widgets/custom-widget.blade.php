<x-filament::widget>
    <x-filament::section>
        {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <div>
            <h2>Posts per Month</h2>
            <canvas id="postsChart"></canvas>
        </div>

        <div>
            <h2>Mahasiswa by Jurusan</h2>
            <canvas id="mahasiswaChart"></canvas>
        </div>

        <script>
            // Posts per Month Chart
            const postsCtx = document.getElementById('postsChart').getContext('2d');
            new Chart(postsCtx, {
                type: 'bar',
                data: {
                    labels: @json(array_keys($chartData['postsPerMonth'])),
                    datasets: [{
                        label: 'Posts',
                        data: @json(array_values($chartData['postsPerMonth'])),
                        backgroundColor: 'rgba(54, 162, 235, 0.6)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1,
                    }],
                },
            });

            // Mahasiswa by Jurusan Chart
            const mahasiswaCtx = document.getElementById('mahasiswaChart').getContext('2d');
            new Chart(mahasiswaCtx, {
                type: 'pie',
                data: {
                    labels: @json(array_keys($chartData['mahasiswaByJurusan'])),
                    datasets: [{
                        label: 'Mahasiswa',
                        data: @json(array_values($chartData['mahasiswaByJurusan'])),
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                        ],
                        borderWidth: 1,
                    }],
                },
            });
        </script> --}}
    </x-filament::section>
</x-filament::widget>
