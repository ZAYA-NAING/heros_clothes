<v-image-link-carousel :errors="errors">
    <x-admin::shimmer.settings.themes.image-link-carousel />
</v-image-link-carousel>

<!-- Image Carousel Vue Component -->
@pushOnce('scripts')
    <script
        type="text/x-template"
        id="v-image-link-carousel-template"
    >
        <div class="flex flex-1 flex-col gap-2 max-xl:flex-auto">
            <div class="box-shadow rounded bg-white p-4 dark:bg-gray-900">
                <div class="flex items-center justify-between gap-x-2.5">
                    <div class="flex flex-col gap-1">
                        <p class="text-base font-semibold text-gray-800 dark:text-white">
                            @lang('admin::app.settings.themes.edit.slider-link')
                        </p>

                        <p class="text-xs font-medium text-gray-500 dark:text-gray-300">
                            @lang('admin::app.settings.themes.edit.slider-link-description')
                        </p>
                    </div>

                    <!-- Add Slider Button -->
                    <div
                        class="secondary-button"
                        @click="$refs.addSliderLinkModal.toggle()"
                    >
                        @lang('admin::app.settings.themes.edit.slider-link-add-btn')
                    </div>
                </div>

                <template v-for="(deletedSlider, index) in deletedSliders">
                    <input
                        type="hidden"
                        :name="'{{ $currentLocale->code }}[deleted_slider_links]['+ index +'][link]'"
                        :value="deletedSlider.link"
                    />
                </template>

                <div
                    class="grid pt-4"
                    v-if="sliders.images.length"
                    v-for="(image, index) in sliders.images"
                >
                    <!-- Hidden Input -->

                    <input
                        type="hidden"
                        :name="'{{ $currentLocale->code }}[options]['+ index +'][title]'"
                        :value="image.title"
                    />

                    <input
                        type="hidden"
                        :name="'{{ $currentLocale->code }}[options]['+ index +'][link]'"
                        :value="image.link"
                    />


                    <!-- Details -->
                    <div
                        class="flex cursor-pointer justify-between gap-2.5 py-5"
                        :class="{
                            'border-b border-slate-300 dark:border-gray-800': index < sliders.images.length - 1
                        }"
                    >
                        <div class="flex gap-2.5">
                            <div class="grid place-content-start gap-1.5">
                                <p class="text-gray-600 dark:text-gray-300">
                                    @lang('admin::app.settings.themes.edit.image-title'):

                                    <span class="text-gray-600 transition-all dark:text-gray-300">
                                        @{{ image.title }}
                                    </span>
                                </p>

                                <p class="text-gray-600 dark:text-gray-300">
                                    @lang('admin::app.settings.themes.edit.link'):

                                    <span class="text-gray-600 transition-all dark:text-gray-300">
                                        @{{ image.link }}
                                    </span>
                                </p>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="grid place-content-start gap-1 text-right">
                            <p
                                class="cursor-pointer text-red-600 transition-all hover:underline"
                                @click="remove(image)"
                            >
                                @lang('admin::app.settings.themes.edit.delete')
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Empty Page -->
                <div
                    class="grid justify-center justify-items-center gap-3.5 px-2.5 py-10"
                    v-else
                >
                    <img
                        class="h-[120px] w-[120px] p-2 dark:mix-blend-exclusion dark:invert"
                        src="{{ bagisto_asset('images/empty-placeholders/default.svg') }}"
                        alt="@lang('admin::app.settings.themes.edit.slider-link')"
                    >

                    <div class="flex flex-col items-center gap-1.5">
                        <p class="text-base font-semibold text-gray-400">
                            @lang('admin::app.settings.themes.edit.slider-link-add-btn')
                        </p>

                        <p class="text-gray-400">
                            @lang('admin::app.settings.themes.edit.slider-link-description')
                        </p>
                    </div>
                </div>
            </div>

            <x-admin::form
                v-slot="{ meta, errors, handleSubmit }"
                as="div"
            >
                <form
                    @submit="handleSubmit($event, saveSliderImage)"
                    enctype="multipart/form-data"
                    ref="createSliderLinkForm"
                >
                    <x-admin::modal ref="addSliderLinkModal">
                        <!-- Modal Header -->
                        <x-slot:header>
                            <p class="text-lg font-bold text-gray-800 dark:text-white">
                                @lang('admin::app.settings.themes.edit.update-slider')
                            </p>
                        </x-slot>

                        <!-- Modal Content -->
                        <x-slot:content>
                            <x-admin::form.control-group>
                                <x-admin::form.control-group.label class="required">
                                    @lang('admin::app.settings.themes.edit.image-title')
                                </x-admin::form.control-group.label>

                                <x-admin::form.control-group.control
                                    type="text"
                                    name="{{ $currentLocale->code }}[title]"
                                    rules="required"
                                    :placeholder="trans('admin::app.settings.themes.edit.image-title')"
                                    :label="trans('admin::app.settings.themes.edit.image-title')"
                                />

                                <x-admin::form.control-group.error control-name="{{ $currentLocale->code }}[title]" />
                            </x-admin::form.control-group>

                            <x-admin::form.control-group>
                                <x-admin::form.control-group.label class="required">
                                    @lang('admin::app.settings.themes.edit.link')
                                </x-admin::form.control-group.label>

                                <x-admin::form.control-group.control
                                    type="text"
                                    name="{{ $currentLocale->code }}[link]"
                                    rules="required"
                                    :placeholder="trans('admin::app.settings.themes.edit.link')"
                                    :label="trans('admin::app.settings.themes.edit.link')"
                                />

                                 <x-admin::form.control-group.error control-name="{{ $currentLocale->code }}[link]" />
                            </x-admin::form.control-group>



                        </x-slot>

                        <!-- Modal Footer -->
                        <x-slot:footer>
                            <button
                                type="submit"
                                class="cursor-pointer rounded-md border border-blue-700 bg-blue-600 px-3 py-1.5 font-semibold text-gray-50"
                            >
                                @lang('admin::app.settings.themes.edit.save-btn')
                            </button>
                        </x-slot>
                    </x-admin::modal>
                </form>
            </x-admin::form>
        </div>
    </script>

    <script type="module">
        app.component('v-image-link-carousel', {
            template: '#v-image-link-carousel-template',

            props: ['errors'],

            data() {
                return {
                    sliders: @json($theme->translate($currentLocale->code)['options'] ?? null),

                    deletedSliders: [],
                };
            },

            created() {
                if (
                    this.sliders == null
                    || this.sliders.length == 0
                ) {
                    this.sliders = { images: [] };
                }
            },

            methods: {
                saveSliderImage(params, { resetForm ,setErrors }) {
                    let formData = new FormData(this.$refs.createSliderLinkForm);

                    try {


                        this.sliders.images.push({
                            title: formData.get("{{ $currentLocale->code }}[title]"),
                            link: formData.get("{{ $currentLocale->code }}[link]"),
                        });

                        resetForm();

                        this.$refs.addSliderLinkModal.toggle();
                    } catch (error) {
                        console.error(error);
                        // setErrors({'slider_image': [error.message]});
                    }
                },

                remove(image) {
                    this.$emitter.emit('open-confirm-modal', {
                        agree: () => {
                            this.deletedSliders.push(image);

                            this.sliders.images = this.sliders.images.filter(item => {
                                return (
                                    item.title !== image.title ||
                                    item.link !== image.link ||
                                    item.image !== image.image
                                );
                            });
                        }
                    });
                },
            },
        });
    </script>
@endPushOnce
