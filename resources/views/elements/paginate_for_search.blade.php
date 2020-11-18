@if ($paginator->lastPage() > 1)
<ul class="catalog__pagination-numbers" id="paginate_ul__paginate">
    <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}"> 
        <a href="{{ $paginator->url(1) }}">
            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M5.37325 0.276952C5.74586 -0.0923176 6.34841 -0.0923176 6.72102 0.276952C7.09299 0.646221 7.09299 1.24463 6.72102 1.6139L2.3 5.99968L6.72102 10.3861C7.09299 10.7554 7.09299 11.3538 6.72102 11.723C6.34841 12.0923 5.74586 12.0923 5.37325 11.723L0.278981 6.66816C-0.0929937 6.29889 -0.0929937 5.70048 0.278981 5.33121L5.37325 0.276952Z"
                    fill="#202124"/>
            </svg>
        </a>
    </li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class=" {{ ($paginator->currentPage() == $i) ? ' catalog__pagination-numbers_active' : '' }} ">
            <a href="{{ $paginator->url($i) }}">       
                {{ $i }}
            </a>
        </li>
    @endfor
    @if($paginator->currentPage())
        @php
            if($paginator->currentPage() == $paginator->lastPage())
                $j=0;
            $j=1;    
        @endphp   
        <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">   
            <a href="{{ $paginator->url($paginator->currentPage()+$j) }}">   
                <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M1.62675 11.723C1.25414 12.0923 0.651592 12.0923 0.278981 11.723C-0.0929936 11.3538 -0.0929936 10.7554 0.278981 10.3861L4.7 6.00032L0.278981 1.6139C-0.0929936 1.24463 -0.0929936 0.646222 0.278981 0.276952C0.651592 -0.0923174 1.25414 -0.0923174 1.62675 0.276952L6.72102 5.33184C7.09299 5.70111 7.09299 6.29952 6.72102 6.66879L1.62675 11.723Z"
                        fill="#202124"/>
                </svg>
            </a>
        </li>
    @endif
</ul>
@endif