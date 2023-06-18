<x-filament::page>
    <div class="flex p-4 px-3  bg-white dark:bg-black">
        <div class="w-1/2 bg-white dark:bg-black">
            <form method="get"
                    autocomplete="on"
                    novalidate
                >
                <label class="font-bold pb-2 block">Bulan</label>
                <select name="month" id="monthSelect" class="selectpicker w-full h-60">
                    @foreach ([
                        'Januari',
                        'Februari',
                        'Maret',
                        'April',
                        'Mei',
                        'Juni',
                        'Juli',
                        'Agustus',
                        'September',
                        'Oktober',
                        'November',
                        'Desember'
                    ] as $i => $item)
                    <option value="{{ $i + 1 }}" @selected($currentMonth === ($i + 1))>{{ $item }}</option>
                    @endforeach
                </select>
            </form>
        </div>
        <div class="w-1/2 flex justify-end align-center">
            <div class="filament-page-actions flex flex-wrap items-center gap-4 justify-start shrink-0">
                <a class="filament-button filament-button-size-md inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset min-h-[2.25rem] px-4 text-sm text-white shadow focus:ring-white border-transparent bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 filament-page-button-action" href="{{ route('print-presence-report', ['month' => $currentMonth]) }}" target="_blank">
                    <span class="">Cetak Laporan</span>
                </a>
            </div>
        </div>
    </div>

    @livewire('list-presence')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.selectpicker').select2();
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#monthSelect').change(function (e) {
                const month = $(this).val();

                const url = new URL(window.location.href);

                url.searchParams.set('month', month);

                window.location.href = url.toString();
            });
        })
    </script>
</x-filament::page>
