<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="border-collapse w-full">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b border-gray-200 bg-blue-500 text-left text-sm font-bold uppercase">Name</th>
                            <th class="py-2 px-4 border-b border-gray-200 bg-blue-500 text-left text-sm font-bold uppercase">Position</th>
                            <th class="py-2 px-4 border-b border-gray-200 bg-blue-500 text-left text-sm font-bold uppercase">Office</th>
                            <th class="py-2 px-4 border-b border-gray-200 bg-blue-500 text-left text-sm font-bold uppercase">Age</th>
                            <th class="py-2 px-4 border-b border-gray-200 bg-blue-500 text-left text-sm font-bold uppercase">Start date</th>
                            <th class="py-2 px-4 border-b border-gray-200 bg-blue-500 text-left text-sm font-bold uppercase">Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">Tiger Nixon</td>
                            <td class="py-2 px-4 border-b border-gray-200">System Architect</td>
                            <td class="py-2 px-4 border-b border-gray-200">Edinburgh</td>
                            <td class="py-2 px-4 border-b border-gray-200">61</td>
                            <td class="py-2 px-4 border-b border-gray-200">2011-04-25</td>
                            <td class="py-2 px-4 border-b border-gray-200">$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011-07-25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009-01-12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012-03-29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008-11-28</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012-12-02</td>
                            <td>$372,000</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012-08-06</td>
                            <td>$137,500</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td>2010-10-14</td>
                            <td>$327,900</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            <td>2009-09-15</td>
                            <td>$205,500</td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                            <td>2008-12-13</td>
                            <td>$103,600</td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
