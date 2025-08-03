<section class="py-10">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-2">Havalimanı Transferini Rezerve Et</h2>
        <p class="text-lg text-center text-gray-600 mb-8">Havalimanına ve havalimanından güvenilir ve uygun fiyatlı transferler</p>
        <form class="bg-white p-8 rounded-lg shadow-md">
            <div class="flex flex-wrap gap-4 mb-6">
                <div class="flex-1 min-w-[200px]">
                    <label for="pickup" class="block text-sm font-medium text-gray-700 mb-1">Nereden</label>
                    <input type="text" id="pickup" class="w-full p-2 border border-gray-300 rounded" placeholder="Kalkış yerini gir">
                </div>
                <div class="flex-1 min-w-[200px]">
                    <label for="departure" class="block text-sm font-medium text-gray-700 mb-1">Nereye</label>
                    <input type="text" id="departure" class="w-full p-2 border border-gray-300 rounded" placeholder="Varış yerini gir">
                </div>
            </div>
            <div class="flex flex-wrap gap-4 mb-6">
                <div class="flex-1 min-w-[200px]">
                    <label for="departure-date" class="block text-sm font-medium text-gray-700 mb-1">Gidiş Tarih & Saat</label>
                    <input type="datetime-local" id="departure-date" class="w-full p-2 border border-gray-300 rounded">
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="round-trip" class="h-4 w-4 text-blue-500">
                    <label for="round-trip" class="ml-2 text-sm font-medium text-gray-700">Gidiş-Dönüş</label>
                </div>
            </div>
            <div class="mb-6 hidden" id="return-date-group">
                <label for="return-date" class="block text-sm font-medium text-gray-700 mb-1">Dönüş Tarih & Saat</label>
                <input type="datetime-local" id="return-date" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-6">
                <label for="passengers" class="block text-sm font-medium text-gray-700 mb-1">Kişi Sayısı</label>
                <select id="passengers" class="w-full p-2 border border-gray-300 rounded">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded hover:bg-blue-600">Şimdi Rezerve Et</button>
        </form>
        <div class="mt-8 text-center">
            <p><strong>EKSTRA İNDİRİM</strong> Gidiş-dönüş rezervasyon yaparak %10 indirim kazanın.</p>
            <p><strong>EKSTRA ÜCRET YOK</strong> Sabit fiyat garantisi ile yolculuk yapın.</p>
            <p><strong>İADE GARANTİSİ</strong> 6 saat öncesine kadar %100 iade.</p>
        </div>
    </div>
</section>
<script>
    document.getElementById('round-trip').addEventListener('change', function() {
        const returnDateGroup = document.getElementById('return-date-group');
        if (this.checked) {
            returnDateGroup.classList.remove('hidden');
        } else {
            returnDateGroup.classList.add('hidden');
        }
    });
</script>
