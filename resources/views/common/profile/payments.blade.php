 <table class="">
     <tr>
         <th class="text_align">اسم الخطة</th>
         <th class="text_align">تاريخ الانتهاء</th>
     </tr>
     @if ($payment)
         <tr>
             <td class="text_align">{{ $payment->plan->name }}</td>
             <td colspan="2" class="text_align">{{ auth()->user()->exipred_at }}</td>
         </tr>
     @else
         <tr>
             <td colspan="2" class="text_align"><a href="{{ route('plans') }}">+ الإشتراك بباقة جديدة</a></td>
         </tr>
     @endif
 </table>
