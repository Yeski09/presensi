<!DOCTYPE html>
<html lang="">
  <head>
    {{-- <meta charset="utf-8"> --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
  </head>
  <body>
    <div class="div">
      <div class="div-2">
        <div class="div-3"></div>
        <div class="div-4">
          <div class="div-5"></div>
          <div class="div-6">
            <div class="div-7">
              <img
                loading="lazy"
                src="{{ asset('assets/img/logo_kj.png') }}"
                {{-- srcset="{{URL::asset('/img/marie.jpg')}}" --}}
                class="img"
              />
              <div class="div-8">PT KOTA JATI FURINDO</div>
            </div>
            <div class="div-9"></div>
            <div class="div-10">FORMULIR INTERNAL</div>
            <div class="div-11"></div>
            <div class="div-12">
              <div class="div-13">No. : I / FI - HC - 21</div>
              <div class="div-14">Tgl/ed/Rev ; {{$datas['date']}}</div>
              <div class="div-15">Hal : 1 dari 1</div>
            </div>
            <div class="div-16"></div>
            <div class="div-17">Gaji Harian</div>
            <div class="div-18"></div>
            <div class="div-19">
              <div class="div-20">
                <div class="div-21">NIK</div>
                <div class="div-22">Nama</div>
                <div class="div-23">Gaji</div>
                <div class="div-24">
                  <div class="div-25">
                    <div class="div-26">Lembur</div>
                    <div class="div-27">Potongan</div>
                    <div class="div-28">
                      <div class="div-29">Uang Makan</div>
                      <div class="div-30">Pinjaman</div>
                    </div>
                    <div class="div-31">
                      <div class="div-32">
                        <div class="div-33">BPJS Tenaga Kerja</div>
                        <div class="div-34">BPJS Kesehatan</div>
                        <div class="div-35">Diterima</div>
                        <div class="div-36">Sisa Pinjaman</div>
                      </div>
                      <div class="div-37">Rp</div>
                    </div>
                  </div>
                  <div class="div-38">jam</div>
                </div>
              </div>
              <div class="div-39">
                <div class="div-40">
                  <div class="div-41">
                    <div class="div-42">{{$datas['employee']->nik}}</div>
                    {{-- <div class="div-43">-</div> --}}
                  </div>
                  <div class="div-44">
                    <div class="div-45">{{$datas['employee']->full_name}}</div>
                    {{-- <div class="div-46">-</div> --}}
                  </div>
                  <div class="div-47">
                    @php
                        $gaji = $datas['employee']->attendance_count * 100000
                    @endphp
                    <div class="div-48">Rp.  </div>
                    <div class="div-49">{{$gaji}}</div>
                  </div>
                  <div class="div-50">
                    <div class="div-51">Rp</div>
                    <div class="div-52">-</div>
                  </div>
                  <div class="div-53">
                    <div class="div-54">Rp</div>
                    <div class="div-55">-</div>
                  </div>
                  <div class="div-56">
                    <div class="div-57">Rp</div>
                    <div class="div-58">-</div>
                  </div>
                  <div class="div-59">
                    <div class="div-60">Rp</div>
                    <div class="div-61">-</div>
                  </div>
                  <div class="div-62">
                    <div class="div-63">Rp</div>
                    <div class="div-64">-</div>
                  </div>
                  <div class="div-65">
                    <div class="div-66">Rp</div>
                    <div class="div-67">-</div>
                  </div>
                </div>
                <div class="div-68"></div>
                <div class="div-69">
                  <div class="div-70">Rp. </div>
                  <div class="div-71">{{$gaji}}</div>
                </div>
              </div>
            </div>
            <div class="div-72"></div>
          </div>
        </div>
      </div>
      <div class="div-73"></div>
    </div>
    <style>
      .div {
        background-color: #fff;
        display: flex;
        gap: 0px;
        font-size: 12px;
        color: #000;
        font-weight: 400;
        padding: 0 8px 27px;
      }
      .div-2 {
        display: flex;
        margin-top: 4px;
        flex-direction: column;
        flex-grow: 1;
        flex-basis: 0;
        width: fit-content;
      }
      .div-3 {
        border-color: rgba(0, 0, 0, 1);
        border-style: solid;
        border-width: 1px;
        background-color: #000;
        height: 1px;
      }
      .div-4 {
        display: flex;
        gap: 0px;
      }
      .div-5 {
        border-color: rgba(0, 0, 0, 1);
        border-style: solid;
        border-width: 1px;
        background-color: #000;
        width: 1px;
        height: 422px;
      }
      .div-6 {
        display: flex;
        margin-top: 6px;
        flex-direction: column;
        flex-grow: 1;
        flex-basis: 0;
        width: fit-content;
        padding: 0 20px;
      }
      .div-7 {
        align-self: center;
        display: flex;
        width: 100%;
        max-width: 311px;
        gap: 20px;
        font-size: 20px;
      }
      .img {
        aspect-ratio: 1;
        object-fit: auto;
        object-position: center;
        width: 35px;
      }
      .div-8 {
        font-family: Bebas Neue, sans-serif;
        flex-grow: 1;
        flex-basis: auto;
        margin: auto 0;
      }
      .div-9 {
        border-color: rgba(0, 0, 0, 1);
        border-style: solid;
        border-width: 1px;
        background-color: #000;
        margin-top: 9px;
        height: 1px;
      }
      .div-10 {
        font-family: Bebas Neue, sans-serif;
        align-self: start;
      }
      .div-11 {
        border-color: rgba(0, 0, 0, 1);
        border-style: solid;
        border-width: 1px;
        background-color: #000;
        height: 1px;
      }
      .div-12 {
        align-self: start;
        display: flex;
        margin-top: 4px;
        flex-direction: column;
      }
      .div-13 {
        font-family: Be Vietnam, sans-serif;
      }
      .div-14 {
        font-family: Be Vietnam, sans-serif;
        margin-top: 6px;
      }
      .div-15 {
        font-family: Be Vietnam, sans-serif;
        margin-top: 6px;
      }
      .div-16 {
        border-color: rgba(0, 0, 0, 1);
        border-style: solid;
        border-width: 1px;
        background-color: #000;
        margin-top: 8px;
        height: 1px;
      }
      .div-17 {
        font-family: Bebas Neue, sans-serif;
        align-self: start;
      }
      .div-18 {
        border-color: rgba(0, 0, 0, 1);
        border-style: solid;
        border-width: 1px;
        background-color: #000;
        height: 1px;
      }
      .div-19 {
        align-self: start;
        display: flex;
        margin-top: 13px;
        gap: 20px;
        justify-content: space-between;
      }
      .div-20 {
        display: flex;
        flex-direction: column;
      }
      .div-21 {
        font-family: Be Vietnam, sans-serif;
      }
      .div-22 {
        font-family: Be Vietnam, sans-serif;
        margin-top: 16px;
      }
      .div-23 {
        font-family: Be Vietnam, sans-serif;
        margin-top: 15px;
      }
      .div-24 {
        display: flex;
        margin-top: 12px;
        gap: 20px;
        justify-content: space-between;
      }
      .div-25 {
        display: flex;
        flex-direction: column;
      }
      .div-26 {
        font-family: Be Vietnam, sans-serif;
      }
      .div-27 {
        font-family: Be Vietnam, sans-serif;
        margin-top: 16px;
      }
      .div-28 {
        display: flex;
        margin-top: 12px;
        flex-direction: column;
        align-items: start;
        padding: 0 65px 0 22px;
      }
      .div-29 {
        font-family: Be Vietnam, sans-serif;
      }
      .div-30 {
        font-family: Be Vietnam, sans-serif;
        margin-top: 12px;
      }
      .div-31 {
        display: flex;
        margin-top: 12px;
        gap: 20px;
        justify-content: space-between;
      }
      .div-32 {
        display: flex;
        flex-direction: column;
      }
      .div-33 {
        font-family: Be Vietnam, sans-serif;
      }
      .div-34 {
        font-family: Be Vietnam, sans-serif;
        align-self: center;
        margin-top: 12px;
      }
      .div-35 {
        font-family: Be Vietnam, sans-serif;
        margin-top: 15px;
      }
      .div-36 {
        font-family: Be Vietnam, sans-serif;
        margin-top: 15px;
      }
      .div-37 {
        font-family: Be Vietnam, sans-serif;
        align-self: end;
        margin-top: 73px;
      }
      .div-38 {
        font-family: Be Vietnam, sans-serif;
        align-self: start;
      }
      .div-39 {
        align-self: start;
        display: flex;
        flex-direction: column;
        white-space: nowrap;
      }
      .div-40 {
        display: flex;
        flex-direction: column;
        align-items: start;
        padding: 0 44px 0 10px;
      }
      .div-41 {
        display: flex;
        gap: 20px;
        justify-content: space-between;
      }
      .div-42 {
        font-family: Be Vietnam, sans-serif;
      }
      .div-43 {
        font-family: Be Vietnam, sans-serif;
        margin: auto 0;
      }
      .div-44 {
        display: flex;
        margin-top: 14px;
        gap: 20px;
        justify-content: space-between;
      }
      .div-45 {
        font-family: Be Vietnam, sans-serif;
      }
      .div-46 {
        font-family: Be Vietnam, sans-serif;
        margin: auto 0;
      }
      .div-47 {
        display: flex;
        margin-top: 14px;
        gap: 20px;
        justify-content: space-between;
      }
      .div-48 {
        font-family: Be Vietnam, sans-serif;
      }
      .div-49 {
        font-family: Be Vietnam, sans-serif;
        margin: auto 0;
      }
      .div-50 {
        display: flex;
        margin-top: 14px;
        gap: 20px;
        justify-content: space-between;
      }
      .div-51 {
        font-family: Be Vietnam, sans-serif;
      }
      .div-52 {
        font-family: Be Vietnam, sans-serif;
        margin: auto 0;
      }
      .div-53 {
        display: flex;
        margin-top: 14px;
        gap: 20px;
        justify-content: space-between;
      }
      .div-54 {
        font-family: Be Vietnam, sans-serif;
      }
      .div-55 {
        font-family: Be Vietnam, sans-serif;
        margin: auto 0;
      }
      .div-56 {
        display: flex;
        margin-top: 14px;
        gap: 20px;
        justify-content: space-between;
      }
      .div-57 {
        font-family: Be Vietnam, sans-serif;
      }
      .div-58 {
        font-family: Be Vietnam, sans-serif;
        margin: auto 0;
      }
      .div-59 {
        display: flex;
        margin-top: 14px;
        gap: 20px;
        justify-content: space-between;
      }
      .div-60 {
        font-family: Be Vietnam, sans-serif;
      }
      .div-61 {
        font-family: Be Vietnam, sans-serif;
        margin: auto 0;
      }
      .div-62 {
        display: flex;
        margin-top: 14px;
        gap: 20px;
        justify-content: space-between;
      }
      .div-63 {
        font-family: Be Vietnam, sans-serif;
      }
      .div-64 {
        font-family: Be Vietnam, sans-serif;
        margin: auto 0;
      }
      .div-65 {
        display: flex;
        margin-top: 14px;
        gap: 20px;
        justify-content: space-between;
      }
      .div-66 {
        font-family: Be Vietnam, sans-serif;
      }
      .div-67 {
        font-family: Be Vietnam, sans-serif;
        margin: auto 0;
      }
      .div-68 {
        border-color: rgba(0, 0, 0, 1);
        border-style: solid;
        border-width: 2px;
        background-color: #000;
        margin-top: 4px;
        height: 2px;
      }
      .div-69 {
        align-self: start;
        display: flex;
        gap: 20px;
        justify-content: space-between;
        margin: 8px 0 0 10px;
      }
      .div-70 {
        font-family: Be Vietnam, sans-serif;
      }
      .div-71 {
        font-family: Be Vietnam, sans-serif;
        margin: auto 0;
      }
      .div-72 {
        border-color: rgba(0, 0, 0, 1);
        border-style: solid;
        border-width: 1px;
        background-color: #000;
        margin-top: 19px;
        height: 1px;
      }
      .div-73 {
        border-color: rgba(0, 0, 0, 1);
        border-style: solid;
        border-width: 1px;
        background-color: #000;
        width: -1px;
        height: 427px;
      }
    </style>
    
  </body>
</html>
