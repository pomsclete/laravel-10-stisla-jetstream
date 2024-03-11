<div>
    <div wire:loading wire:target="export">
        <div style="display: flex;justify-content: center;align-items: center;background-color: black;
position: fixed;top: 0px;left: 0px;z-index: 9999;width: 100%;height: 100%;opacity: .75">
            <div class="la-ball-spin la-dark la-2x" style="color: white">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <div wire:loading wire:target="affiche">
        <div style="display: flex;justify-content: center;align-items: center;background-color: black;
position: fixed;top: 0px;left: 0px;z-index: 9999;width: 100%;height: 100%;opacity: .75">
            <div class="la-ball-spin la-dark la-2x" style="color: white">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <button type="button" wire:click="showmodal()" class="btn bg-primary btn-primary"><i class="fa fa-file-excel"></i> {{ __('Exporter vers Excel') }}
    </button>
    <div wire:ignore.self class="modal" id="modalColonne" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalClause">
                        {{ __('Personnaliser l\'export de votre Etat RH vers Excel') }}
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <div class="table table-striped table-md">
                            <tbody>
                            <tr>
                                <td class="text-center">
                                    <label for=""> Du</label>
                                    <input type="date" wire:model="date_debut" class="form-control date"  autocomplete="off">
                                    @error('date_debut')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </td>
                                <td class="text-center">
                                    <label for="">Au</label>
                                    <input type="date" wire:model="date_fin" class="form-control date"  autocomplete="off">
                                    @error('date_fin')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </td>
                                <td class="text-center">
                                    <label for=""></label>
                                    <select wire:model="format" id="" class="form-control">
                                        <option value="" selected>Exporter vers</option>
                                        <option value="xlsx">Excel (xlsx)</option>
                                        <option value="xls">Excel (xls)</option>
                                        <option value="csv">Excel (csv)</option>
                                    </select>
                                    @error('format')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </td>

                            </tr>
                            </tbody>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="modal-footer">
                        <button type="button" wire:click.prevent="export()" class="btn bg-success btn-success">{{ __('Exporter') }}</button>
                        <button type="button" wire:click="clausemodal()" class="btn bg-danger btn-danger">{{ __('message.close') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('styles')
    <style>
        .la-line-scale,
        .la-line-scale > div {
            position: relative;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .la-line-scale {
            display: block;
            font-size: 0;
            color: #fff;
        }
        .la-line-scale.la-dark {
            color: #fff;
        }
        .la-line-scale > div {
            display: inline-block;
            float: none;
            background-color: currentColor;
            border: 0 solid currentColor;
        }
        .la-line-scale {
            width: 40px;
            height: 32px;
        }
        .la-line-scale > div {
            width: 4px;
            height: 32px;
            margin: 2px;
            margin-top: 0;
            margin-bottom: 0;
            border-radius: 0;
            -webkit-animation: line-scale 1.2s infinite ease;
            -moz-animation: line-scale 1.2s infinite ease;
            -o-animation: line-scale 1.2s infinite ease;
            animation: line-scale 1.2s infinite ease;
        }
        .la-line-scale > div:nth-child(1) {
            -webkit-animation-delay: -1.2s;
            -moz-animation-delay: -1.2s;
            -o-animation-delay: -1.2s;
            animation-delay: -1.2s;
        }
        .la-line-scale > div:nth-child(2) {
            -webkit-animation-delay: -1.1s;
            -moz-animation-delay: -1.1s;
            -o-animation-delay: -1.1s;
            animation-delay: -1.1s;
        }
        .la-line-scale > div:nth-child(3) {
            -webkit-animation-delay: -1s;
            -moz-animation-delay: -1s;
            -o-animation-delay: -1s;
            animation-delay: -1s;
        }
        .la-line-scale > div:nth-child(4) {
            -webkit-animation-delay: -.9s;
            -moz-animation-delay: -.9s;
            -o-animation-delay: -.9s;
            animation-delay: -.9s;
        }
        .la-line-scale > div:nth-child(5) {
            -webkit-animation-delay: -.8s;
            -moz-animation-delay: -.8s;
            -o-animation-delay: -.8s;
            animation-delay: -.8s;
        }
        .la-line-scale.la-sm {
            width: 20px;
            height: 16px;
        }
        .la-line-scale.la-sm > div {
            width: 2px;
            height: 16px;
            margin: 1px;
            margin-top: 0;
            margin-bottom: 0;
        }
        .la-line-scale.la-2x {
            width: 80px;
            height: 64px;
        }
        .la-line-scale.la-2x > div {
            width: 8px;
            height: 64px;
            margin: 4px;
            margin-top: 0;
            margin-bottom: 0;
        }
        .la-line-scale.la-3x {
            width: 120px;
            height: 96px;
        }
        .la-line-scale.la-3x > div {
            width: 12px;
            height: 96px;
            margin: 6px;
            margin-top: 0;
            margin-bottom: 0;
        }
        /*
         * Animation
         */
        @-webkit-keyframes line-scale {
            0%,
            40%,
            100% {
                -webkit-transform: scaleY(.4);
                transform: scaleY(.4);
            }
            20% {
                -webkit-transform: scaleY(1);
                transform: scaleY(1);
            }
        }
        @-moz-keyframes line-scale {
            0%,
            40%,
            100% {
                -webkit-transform: scaleY(.4);
                -moz-transform: scaleY(.4);
                transform: scaleY(.4);
            }
            20% {
                -webkit-transform: scaleY(1);
                -moz-transform: scaleY(1);
                transform: scaleY(1);
            }
        }
        @-o-keyframes line-scale {
            0%,
            40%,
            100% {
                -webkit-transform: scaleY(.4);
                -o-transform: scaleY(.4);
                transform: scaleY(.4);
            }
            20% {
                -webkit-transform: scaleY(1);
                -o-transform: scaleY(1);
                transform: scaleY(1);
            }
        }
        @keyframes line-scale {
            0%,
            40%,
            100% {
                -webkit-transform: scaleY(.4);
                -moz-transform: scaleY(.4);
                -o-transform: scaleY(.4);
                transform: scaleY(.4);
            }
            20% {
                -webkit-transform: scaleY(1);
                -moz-transform: scaleY(1);
                -o-transform: scaleY(1);
                transform: scaleY(1);
            }
        }

        /*!
   * Load Awesome v1.1.0 (http://github.danielcardoso.net/load-awesome/)
   * Copyright 2015 Daniel Cardoso <@DanielCardoso>
   * Licensed under MIT
   */
        .la-ball-spin,
        .la-ball-spin > div {
            position: relative;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .la-ball-spin {
            display: block;
            font-size: 0;
            color: #fff;
        }
        .la-ball-spin.la-dark {
            color: #333;
        }
        .la-ball-spin > div {
            display: inline-block;
            float: none;
            background-color: currentColor;
            border: 0 solid currentColor;
        }
        .la-ball-spin {
            width: 32px;
            height: 32px;
        }
        .la-ball-spin > div {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 8px;
            height: 8px;
            margin-top: -4px;
            margin-left: -4px;
            border-radius: 100%;
            -webkit-animation: ball-spin 1s infinite ease-in-out;
            -moz-animation: ball-spin 1s infinite ease-in-out;
            -o-animation: ball-spin 1s infinite ease-in-out;
            animation: ball-spin 1s infinite ease-in-out;
        }
        .la-ball-spin > div:nth-child(1) {
            top: 5%;
            left: 50%;
            -webkit-animation-delay: -1.125s;
            -moz-animation-delay: -1.125s;
            -o-animation-delay: -1.125s;
            animation-delay: -1.125s;
        }
        .la-ball-spin > div:nth-child(2) {
            top: 18.1801948466%;
            left: 81.8198051534%;
            -webkit-animation-delay: -1.25s;
            -moz-animation-delay: -1.25s;
            -o-animation-delay: -1.25s;
            animation-delay: -1.25s;
        }
        .la-ball-spin > div:nth-child(3) {
            top: 50%;
            left: 95%;
            -webkit-animation-delay: -1.375s;
            -moz-animation-delay: -1.375s;
            -o-animation-delay: -1.375s;
            animation-delay: -1.375s;
        }
        .la-ball-spin > div:nth-child(4) {
            top: 81.8198051534%;
            left: 81.8198051534%;
            -webkit-animation-delay: -1.5s;
            -moz-animation-delay: -1.5s;
            -o-animation-delay: -1.5s;
            animation-delay: -1.5s;
        }
        .la-ball-spin > div:nth-child(5) {
            top: 94.9999999966%;
            left: 50.0000000005%;
            -webkit-animation-delay: -1.625s;
            -moz-animation-delay: -1.625s;
            -o-animation-delay: -1.625s;
            animation-delay: -1.625s;
        }
        .la-ball-spin > div:nth-child(6) {
            top: 81.8198046966%;
            left: 18.1801949248%;
            -webkit-animation-delay: -1.75s;
            -moz-animation-delay: -1.75s;
            -o-animation-delay: -1.75s;
            animation-delay: -1.75s;
        }
        .la-ball-spin > div:nth-child(7) {
            top: 49.9999750815%;
            left: 5.0000051215%;
            -webkit-animation-delay: -1.875s;
            -moz-animation-delay: -1.875s;
            -o-animation-delay: -1.875s;
            animation-delay: -1.875s;
        }
        .la-ball-spin > div:nth-child(8) {
            top: 18.179464974%;
            left: 18.1803700518%;
            -webkit-animation-delay: -2s;
            -moz-animation-delay: -2s;
            -o-animation-delay: -2s;
            animation-delay: -2s;
        }
        .la-ball-spin.la-sm {
            width: 16px;
            height: 16px;
        }
        .la-ball-spin.la-sm > div {
            width: 4px;
            height: 4px;
            margin-top: -2px;
            margin-left: -2px;
        }
        .la-ball-spin.la-2x {
            width: 64px;
            height: 64px;
        }
        .la-ball-spin.la-2x > div {
            width: 16px;
            height: 16px;
            margin-top: -8px;
            margin-left: -8px;
        }
        .la-ball-spin.la-3x {
            width: 96px;
            height: 96px;
        }
        .la-ball-spin.la-3x > div {
            width: 24px;
            height: 24px;
            margin-top: -12px;
            margin-left: -12px;
        }
        /*
         * Animation
         */
        @-webkit-keyframes ball-spin {
            0%,
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            20% {
                opacity: 1;
            }
            80% {
                opacity: 0;
                -webkit-transform: scale(0);
                transform: scale(0);
            }
        }
        @-moz-keyframes ball-spin {
            0%,
            100% {
                opacity: 1;
                -moz-transform: scale(1);
                transform: scale(1);
            }
            20% {
                opacity: 1;
            }
            80% {
                opacity: 0;
                -moz-transform: scale(0);
                transform: scale(0);
            }
        }
        @-o-keyframes ball-spin {
            0%,
            100% {
                opacity: 1;
                -o-transform: scale(1);
                transform: scale(1);
            }
            20% {
                opacity: 1;
            }
            80% {
                opacity: 0;
                -o-transform: scale(0);
                transform: scale(0);
            }
        }
        @keyframes ball-spin {
            0%,
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1);
            }
            20% {
                opacity: 1;
            }
            80% {
                opacity: 0;
                -webkit-transform: scale(0);
                -moz-transform: scale(0);
                -o-transform: scale(0);
                transform: scale(0);
            }
        }
    </style>
@endpush
