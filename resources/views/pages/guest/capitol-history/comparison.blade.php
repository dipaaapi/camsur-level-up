{{-- COMPARISON --}}
<section class="reveal surface surface-pad section">
    <span class="eyebrow">Comparative Development</span>
    <h2 class="h-sec">From Functional Capitol to Iconic Civic Landmark</h2>
    <p class="lede">
        How Camarines Sur moved from a purely functional administrative structure toward an expressive, sustainable,
        multi-purpose, future-ready provincial landmark.
    </p>
    <div class="mt-8 overflow-x-auto rounded-2xl border border-gray-200">
        <table class="w-full min-w-[760px] text-left text-sm">
            <thead class="bg-blue-950 text-white">
                <tr>
                    <th class="px-5 py-4 font-black">Feature</th>
                    <th class="px-5 py-4 font-black">Bensia Reconstruction</th>
                    <th class="px-5 py-4 font-black">New Iconic Capitol</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ([
                    ['Style','Functionalist / utility-focused','Parametric / iconic / civic landmark'],
                    ['Design Motif','Traditional office structure','Pili nut husks and Mt. Isarog-inspired profile'],
                    ['Sustainability','Standard construction approach','Solar panels, metal mesh, natural ventilation, green design'],
                    ['Public Function','Administrative center','Administrative, civic, cultural, and emergency-response space'],
                    ['Scope','Single government building','Part of CamSur Uptown and the wider development vision'],
                ] as $row)
                    <tr class="{{ $loop->even ? 'bg-gray-50' : '' }}">
                        <td class="px-5 py-4 font-black text-blue-950">{{ $row[0] }}</td>
                        <td class="px-5 py-4 text-gray-700">{{ $row[1] }}</td>
                        <td class="px-5 py-4 text-gray-700">{{ $row[2] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
