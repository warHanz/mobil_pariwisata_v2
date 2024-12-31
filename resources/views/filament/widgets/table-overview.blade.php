<div class="space-y-4">
    <x-filament::tabs>
        @foreach ($tabs as $key => $tab)
            <x-filament::tabs.item :label="$tab['label']" :active="$loop->first">
                <div class="overflow-auto">
                    <table class="min-w-full table-auto border-collapse border border-gray-200 rounded-lg">
                        <thead class="bg-gray-100">
                            <tr>
                                @foreach ($tab['columns'] as $column)
                                    <th class="text-left px-4 py-2 border-b">{{ $column }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tab['data'] as $row)
                                <tr class="border-t">
                                    <td class="px-4 py-2 border-b">{{ $row->title }}</td>
                                    <td class="px-4 py-2 border-b">{{ $row->views }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </x-filament::tabs.item>
        @endforeach
    </x-filament::tabs>
</div>
