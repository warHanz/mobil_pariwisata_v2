<x-filament::page>
    <!-- Grid Layout for Cards -->
    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
        <!-- Card for Total Articles -->
        <x-filament::card>
            <h3 class="text-lg font-semibold">Total Articles</h3>
            <p class="text-xl">{{ $this->getCardsData()['total_articles'] }}</p>
        </x-filament::card>

        <!-- Card for Total Users -->
        <x-filament::card>
            <h3 class="text-lg font-semibold">Total Users</h3>
            <p class="text-xl">{{ $this->getCardsData()['total_users'] }}</p>
        </x-filament::card>

        <!-- Card for Active Articles -->
        <x-filament::card>
            <h3 class="text-lg font-semibold">Active Articles</h3>
            <p class="text-xl">{{ $this->getCardsData()['active_articles'] }}</p>
        </x-filament::card>
    </div>

    <!-- Table for Most Viewed Articles -->
    <x-filament::section>
        <h3 class="text-xl font-semibold mb-4">Most Viewed Articles</h3>
        <x-filament-tables::table>
            <x-filament-tables::header>
                <x-filament-tables::column label="Title" />
                <x-filament-tables::column label="Views" />
                <x-filament-tables::column label="Publish Date" />
            </x-filament-tables::header>

            <x-filament-tables::rows>
                @foreach ($this->getMostViewedArticles() as $article)
                    <x-filament-tables::row>
                        <x-filament-tables::cell>{{ $article->title }}</x-filament-tables::cell>
                        <x-filament-tables::cell>{{ $article->views }}</x-filament-tables::cell>
                        <x-filament-tables::cell>{{ $article->publish_date->format('d M Y') }}</x-filament-tables::cell>
                    </x-filament-tables::row>
                @endforeach
            </x-filament-tables::rows>
        </x-filament-tables::table>
    </x-filament::section>

    <!-- Table for Most Recent Articles -->
    <x-filament::section>
        <h3 class="text-xl font-semibold mb-4">Most Recent Articles</h3>
        <x-filament-tables::table>
            <x-filament-tables::header>
                <x-filament-tables::column label="Title" />
                <x-filament-tables::column label="Publish Date" />
            </x-filament-tables::header>

            <x-filament-tables::rows>
                @foreach ($this->getMostRecentArticles() as $article)
                    <x-filament-tables::row>
                        <x-filament-tables::cell>{{ $article->title }}</x-filament-tables::cell>
                        <x-filament-tables::cell>{{ $article->publish_date->format('d M Y') }}</x-filament-tables::cell>
                    </x-filament-tables::row>
                @endforeach
            </x-filament-tables::rows>
        </x-filament-tables::table>
    </x-filament::section>

    <!-- Table for Most Recent Users -->
    <x-filament::section>
        <h3 class="text-xl font-semibold mb-4">Most Recent Users</h3>
        <x-filament-tables::table>
            <x-filament-tables::header>
                <x-filament-tables::column label="Name" />
                <x-filament-tables::column label="Email" />
                <x-filament-tables::column label="Created At" />
            </x-filament-tables::header>

            <x-filament-tables::rows>
                @foreach ($this->getMostRecentUsers() as $user)
                    <x-filament-tables::row>
                        <x-filament-tables::cell>{{ $user->name }}</x-filament-tables::cell>
                        <x-filament-tables::cell>{{ $user->email }}</x-filament-tables::cell>
                        <x-filament-tables::cell>{{ $user->created_at->format('d M Y') }}</x-filament-tables::cell>
                    </x-filament-tables::row>
                @endforeach
            </x-filament-tables::rows>
        </x-filament-tables::table>
    </x-filament::section>
</x-filament::page>
