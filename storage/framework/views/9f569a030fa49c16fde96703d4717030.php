<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'name' => '',
    'precognitive' => false,
    'hideSubmit' => false,
    'submitLabel' => '',
    'fields' => [],
    'buttons' => [],
    'errors' => [],
    'errorsAbove' => true,
    'submitAttributes' => null,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'name' => '',
    'precognitive' => false,
    'hideSubmit' => false,
    'submitLabel' => '',
    'fields' => [],
    'buttons' => [],
    'errors' => [],
    'errorsAbove' => true,
    'submitAttributes' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if($errorsAbove): ?>
    <?php if (isset($component)) { $__componentOriginalbb716f453a3ac2293ac2e14bd98aef2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb716f453a3ac2293ac2e14bd98aef2c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.all-errors','data' => ['errors' => $errors]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.all-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb716f453a3ac2293ac2e14bd98aef2c)): ?>
<?php $attributes = $__attributesOriginalbb716f453a3ac2293ac2e14bd98aef2c; ?>
<?php unset($__attributesOriginalbb716f453a3ac2293ac2e14bd98aef2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb716f453a3ac2293ac2e14bd98aef2c)): ?>
<?php $component = $__componentOriginalbb716f453a3ac2293ac2e14bd98aef2c; ?>
<?php unset($__componentOriginalbb716f453a3ac2293ac2e14bd98aef2c); ?>
<?php endif; ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginala83b3859802539a406efce525ddd52da = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala83b3859802539a406efce525ddd52da = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.index','data' => ['attributes' => $attributes,'name' => $name,'precognitive' => $precognitive,'errors' => $errors]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'precognitive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($precognitive),'errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
    <?php if (isset($component)) { $__componentOriginald06328ac35b55b584ab4551d5f6b335b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald06328ac35b55b584ab4551d5f6b335b = $attributes; } ?>
<?php $component = MoonShine\UI\Components\FieldsGroup::resolve(['components' => $fields] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::fields-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\FieldsGroup::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald06328ac35b55b584ab4551d5f6b335b)): ?>
<?php $attributes = $__attributesOriginald06328ac35b55b584ab4551d5f6b335b; ?>
<?php unset($__attributesOriginald06328ac35b55b584ab4551d5f6b335b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald06328ac35b55b584ab4551d5f6b335b)): ?>
<?php $component = $__componentOriginald06328ac35b55b584ab4551d5f6b335b; ?>
<?php unset($__componentOriginald06328ac35b55b584ab4551d5f6b335b); ?>
<?php endif; ?>

     <?php $__env->slot('buttons', null, []); ?> 
        <?php if(!($hideSubmit ?? false)): ?>
        <?php if (isset($component)) { $__componentOriginaldafd5965086f19145b581eeb5ef12cdb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldafd5965086f19145b581eeb5ef12cdb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.button','data' => ['attributes' => $submitAttributes?->merge([
                'class' => 'js-form-submit-button',
                'type' => 'submit'
            ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($submitAttributes?->merge([
                'class' => 'js-form-submit-button',
                'type' => 'submit'
            ]))]); ?>
            <?php if (isset($component)) { $__componentOriginal985250747768bf6e9eda28185ae7cf0c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal985250747768bf6e9eda28185ae7cf0c = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Spinner::resolve(['color' => 'secondary'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::spinner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\Spinner::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'js-form-submit-button-loader','style' => 'display: none;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal985250747768bf6e9eda28185ae7cf0c)): ?>
<?php $attributes = $__attributesOriginal985250747768bf6e9eda28185ae7cf0c; ?>
<?php unset($__attributesOriginal985250747768bf6e9eda28185ae7cf0c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal985250747768bf6e9eda28185ae7cf0c)): ?>
<?php $component = $__componentOriginal985250747768bf6e9eda28185ae7cf0c; ?>
<?php unset($__componentOriginal985250747768bf6e9eda28185ae7cf0c); ?>
<?php endif; ?>

            <?php echo e($submitLabel); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldafd5965086f19145b581eeb5ef12cdb)): ?>
<?php $attributes = $__attributesOriginaldafd5965086f19145b581eeb5ef12cdb; ?>
<?php unset($__attributesOriginaldafd5965086f19145b581eeb5ef12cdb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldafd5965086f19145b581eeb5ef12cdb)): ?>
<?php $component = $__componentOriginaldafd5965086f19145b581eeb5ef12cdb; ?>
<?php unset($__componentOriginaldafd5965086f19145b581eeb5ef12cdb); ?>
<?php endif; ?>
        <?php else: ?>
            <button type="submit" class="js-form-submit-button" style="display: none;">
                <?php if (isset($component)) { $__componentOriginal985250747768bf6e9eda28185ae7cf0c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal985250747768bf6e9eda28185ae7cf0c = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Spinner::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::spinner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\Spinner::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'js-form-submit-button-loader']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal985250747768bf6e9eda28185ae7cf0c)): ?>
<?php $attributes = $__attributesOriginal985250747768bf6e9eda28185ae7cf0c; ?>
<?php unset($__attributesOriginal985250747768bf6e9eda28185ae7cf0c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal985250747768bf6e9eda28185ae7cf0c)): ?>
<?php $component = $__componentOriginal985250747768bf6e9eda28185ae7cf0c; ?>
<?php unset($__componentOriginal985250747768bf6e9eda28185ae7cf0c); ?>
<?php endif; ?>
            </button>
        <?php endif; ?>

        <?php if($buttons->isNotEmpty()): ?>
            <?php if (isset($component)) { $__componentOriginal6f085d696dd7d828147cf91e90b3540c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f085d696dd7d828147cf91e90b3540c = $attributes; } ?>
<?php $component = MoonShine\UI\Components\ActionGroup::resolve(['actions' => $buttons] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::action-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\ActionGroup::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f085d696dd7d828147cf91e90b3540c)): ?>
<?php $attributes = $__attributesOriginal6f085d696dd7d828147cf91e90b3540c; ?>
<?php unset($__attributesOriginal6f085d696dd7d828147cf91e90b3540c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f085d696dd7d828147cf91e90b3540c)): ?>
<?php $component = $__componentOriginal6f085d696dd7d828147cf91e90b3540c; ?>
<?php unset($__componentOriginal6f085d696dd7d828147cf91e90b3540c); ?>
<?php endif; ?>
        <?php endif; ?>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala83b3859802539a406efce525ddd52da)): ?>
<?php $attributes = $__attributesOriginala83b3859802539a406efce525ddd52da; ?>
<?php unset($__attributesOriginala83b3859802539a406efce525ddd52da); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala83b3859802539a406efce525ddd52da)): ?>
<?php $component = $__componentOriginala83b3859802539a406efce525ddd52da; ?>
<?php unset($__componentOriginala83b3859802539a406efce525ddd52da); ?>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/src/Laravel/src/Providers/../../../UI/resources/views/components/form/builder.blade.php ENDPATH**/ ?>