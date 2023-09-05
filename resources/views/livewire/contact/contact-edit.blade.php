<section>
    {{-- Edit button --}}
    <x-button wire:click="$emitSelf('showModal')" wire:loading.attr='disabled'>
        Editar
    </x-button>

    <x-dialog-modal wire:model.defer='showModal'>
        {{-- Title --}}
        <x-slot name='title'>
            <h1 class="text-start mb-4">Editar contato</h1>
        </x-slot>

        {{-- Content --}}
        <x-slot name='content'>
            <div class="text-start">
                {{-- Form --}}
                <form wire:submit.prevent="update" id="edit-contact-form">
                    @csrf

                    <div class="mb-4">
                        <x-label for="email" value="Email"/>
                        <x-input label="Email" placeholder="Email"
                                 wire:model.debounce.500ms="contact.email" name="email" id="email"
                                 autofocus
                                 class="w-full"/>
                        <x-input-error for="contact.email"/>
                    </div>
                    <div class="mb-4">
                        <x-label for="whatsapp" value="WhatsApp"/>
                        <x-input label="WhatsApp" placeholder="WhatsApp"
                                 wire:model.debounce.500ms="contact.whatsapp" name="whatsapp" id="whatsapp"
                                 class="w-full" maxlength="11"/>
                        <x-input-error for="contact.whatsapp"/>
                    </div>
                    <div class="mb-4">
                        <x-label for="pre_written_whatsapp_message" value="Mensagem pré-escrita do WhatsApp"/>
                        <textarea label="Mensagem pré-escrita do WhatsApp" placeholder="Mensagem pré-escrita do WhatsApp"
                                 wire:model.debounce.500ms="contact.pre_written_whatsapp_message" name="pre_written_whatsapp_message" id="pre_written_whatsapp_message"
                                  class="w-full rounded shadow-sm border-gray-300" rows="5"></textarea>
                        <x-input-error for="contact.pre_written_whatsapp_message"/>
                    </div>
                    <div class="mb-4">
                        <x-label for="instagram_link" value="Link do Instagram"/>
                        <x-input label="Link do Instagram" placeholder="Link do Instagram"
                                 wire:model.debounce.500ms="contact.instagram_link" name="instagram_link" id="instagram_link"
                                 class="w-full"/>
                        <x-input-error for="contact.instagram_link"/>
                    </div>
                    <div class="mb-4">
                        <x-label for="facebook_link" value="Link do Facebook"/>
                        <x-input label="Link do Facebook" placeholder="Link do Facebook"
                                 wire:model.debounce.500ms="contact.facebook_link" name="facebook_link" id="facebook_link"
                                 class="w-full"/>
                        <x-input-error for="contact.facebook_link"/>
                    </div>
                </form>
            </div>
        </x-slot>

        {{-- Footer --}}
        <x-slot name='footer'>

            {{-- Cancel button --}}
            <x-secondary-button wire:click="$emitSelf('closeModal')" wire:loading.attr="disabled">
                Cancelar
            </x-secondary-button>

            {{-- Submit button --}}
            <x-button class="ml-4 bg-blue-600 dark:bg-blue-600" wire:target="update" wire:loading.attr="disabled"
                      type="submit" form="edit-contact-form">
                Editar
            </x-button>

        </x-slot>
    </x-dialog-modal>

</section>
