@extends('layouts.app')

@section('page-title','Loans')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full min-w-0">
        <div class="md:col-span-3">
            <div
                class="flex overflow-x-auto gap-5 pb-4 hide-scrollbar md:grid md:grid-cols-4 md:gap-5 md:overflow-visible md:pb-0">
                <div
                    class="min-w-[240px] flex-none p-4 rounded-xl bg-white flex items-center gap-3 md:min-w-0 md:p-3 md:gap-2">
                    <div
                        class="w-10 h-10 flex items-center justify-center rounded-full md:w-8 md:h-8 md:min-w-8 md:min-h-8 bg-[#E7EDFF] text-[#2D60FF]">
                        {!! file_get_contents(public_path('icons/user.svg')) !!}
                    </div>
                    <div>
                        <p class="text-sm text-[#718EBF] md:text-xs">Personal Loans</p>
                        <p class="font-semibold text-[#343C6A] md:text-sm">$50,000</p>
                    </div>
                </div>

                <div
                    class="min-w-[240px] flex-none p-4 rounded-xl bg-white flex items-center gap-3 md:min-w-0 md:p-3 md:gap-2">
                    <div
                        class="w-10 h-10 flex items-center justify-center rounded-full md:w-8 md:h-8 md:min-w-8 md:min-h-8 bg-[#FFF5D9] text-white">
                        {!! file_get_contents(public_path('icons/corporate.svg')) !!}
                    </div>
                    <div>
                        <p class="text-sm text-[#718EBF] md:text-xs">Corporate Loans</p>
                        <p class="font-semibold text-[#343C6A] md:text-sm">$100,000</p>
                    </div>
                </div>

                <div
                    class="min-w-[240px] flex-none p-4 rounded-xl bg-white flex items-center gap-3 md:min-w-0 md:p-3 md:gap-2">
                    <div
                        class="w-10 h-10 flex items-center justify-center rounded-full md:w-8 md:h-8 md:min-w-8 md:min-h-8 bg-[#FFE0EB] text-white">
                        {!! file_get_contents(public_path('icons/business.svg')) !!}
                    </div>
                    <div>
                        <p class="text-sm text-[#718EBF] md:text-xs">Business Loans</p>
                        <p class="font-semibold text-[#343C6A] md:text-sm">$500,000</p>
                    </div>
                </div>

                <div
                    class="min-w-[240px] flex-none p-4 rounded-xl bg-white flex items-center gap-3 md:min-w-0 md:p-3 md:gap-2">
                    <div
                        class="w-10 h-10 flex items-center justify-center rounded-full md:w-8 md:h-8 md:min-w-8 md:min-h-8 bg-[#DCFAF8] text-white">
                        {!! file_get_contents(public_path('icons/custom.svg')) !!}
                    </div>
                    <div>
                        <p class="text-sm text-[#718EBF] md:text-xs">Custom Loans</p>
                        <p class="font-semibold text-[#343C6A] md:text-sm">Choose Money</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:col-span-3">
            <div class="p-4 rounded-xl bg-white w-full min-w-0">
                <h2 class="font-semibold text-[#343C6A] mb-3">Active Loans Overview</h2>
                <div
                    class="hidden md:block overflow-x-auto rounded-xl hide-scrollbar">
                    <table class="min-w-full text-sm text-left">
                        <thead class="text-[#718EBF]">
                        <tr>
                            <th class="px-4 py-3">SL No</th>
                            <th class="px-4 py-3">Loan Money</th>
                            <th class="px-4 py-3">Left to repay</th>
                            <th class="px-4 py-3">Duration</th>
                            <th class="px-4 py-3">Interest rate</th>
                            <th class="px-4 py-3">Installment</th>
                            <th class="px-4 py-3">Repay</th>
                        </tr>
                        </thead>
                        <tbody class="text-[#343C6A]">
                        <tr class="border-t">
                            <td class="px-4 py-3">01.</td>
                            <td class="px-4 py-3">$100,000</td>
                            <td class="px-4 py-3">$100,000</td>
                            <td class="px-4 py-3">8 Months</td>
                            <td class="px-4 py-3">12%</td>
                            <td class="px-4 py-3">$2,000 / month</td>
                            <td class="px-4 py-3">
                                <button class="border border-[#2D60FF] text-[#2D60FF] px-4 py-1 rounded-full text-sm">
                                    Repay
                                </button>
                            </td>
                        </tr>
                        <tr class="border-t">
                            <td class="px-4 py-3">02.</td>
                            <td class="px-4 py-3">$100,000</td>
                            <td class="px-4 py-3">$100,000</td>
                            <td class="px-4 py-3">8 Months</td>
                            <td class="px-4 py-3">12%</td>
                            <td class="px-4 py-3">$2,000 / month</td>
                            <td class="px-4 py-3">
                                <button class="border border-[#232323] text-[#232323] px-4 py-1 rounded-full text-sm">
                                    Repay
                                </button>
                            </td>
                        </tr>
                        <tr class="border-t">
                            <td class="px-4 py-3">03.</td>
                            <td class="px-4 py-3">$100,000</td>
                            <td class="px-4 py-3">$100,000</td>
                            <td class="px-4 py-3">8 Months</td>
                            <td class="px-4 py-3">12%</td>
                            <td class="px-4 py-3">$2,000 / month</td>
                            <td class="px-4 py-3">
                                <button class="border border-[#232323] text-[#232323] px-4 py-1 rounded-full text-sm">
                                    Repay
                                </button>
                            </td>
                        </tr>
                        <tr class="border-t text-[#FE5C73]">
                            <td class="px-4 py-3">Total</td>
                            <td class="px-4 py-3">$100,000</td>
                            <td class="px-4 py-3">$40,500</td>
                            <td class="px-4 py-3"></td>
                            <td class="px-4 py-3"></td>
                            <td class="px-4 py-3" colspan="2">$2,000,000 / month</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="block md:hidden overflow-x-auto rounded-xl mt-4 hide-scrollbar">
                    <table class="min-w-full text-sm text-left">
                        <thead class="text-[#718EBF]">
                        <tr>
                            <th class="px-4 py-3">Loan Money</th>
                            <th class="px-4 py-3">Left to repay</th>
                            <th class="px-4 py-3">Repay</th>
                        </tr>
                        </thead>
                        <tbody class="text-[#343C6A]">
                        <tr class="border-t">
                            <td class="px-4 py-3">$100,000</td>
                            <td class="px-4 py-3">$40,500</td>
                            <td class="px-4 py-3">
                                <button class="border border-[#2D60FF] text-[#2D60FF] px-4 py-1 rounded-full text-sm">
                                    Repay
                                </button>
                            </td>
                        </tr>
                        <tr class="border-t">
                            <td class="px-4 py-3">$100,000</td>
                            <td class="px-4 py-3">$40,500</td>
                            <td class="px-4 py-3">
                                <button class="border border-[#232323] text-[#232323] px-4 py-1 rounded-full text-sm">
                                    Repay
                                </button>
                            </td>
                        </tr>
                        <tr class="border-t">
                            <td class="px-4 py-3">$100,000</td>
                            <td class="px-4 py-3">$40,500</td>
                            <td class="px-4 py-3">
                                <button class="border border-[#232323] text-[#232323] px-4 py-1 rounded-full text-sm">
                                    Repay
                                </button>
                            </td>
                        </tr>
                        <tr class="border-t text-[#FE5C73]">
                            <td class="px-4 py-3">Total<br>$100,000</td>
                            <td class="px-4 py-3"><br>$40,500</td>
                            <td class="px-4 py-3"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
