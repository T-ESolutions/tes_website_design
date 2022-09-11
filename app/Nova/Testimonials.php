<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Nikaia\Rating\Rating;
use Laravel\Nova\Http\Requests\NovaRequest;

class Testimonials extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Testimonials::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'user_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'user_name',
        'user_position',
        'body_ar',
        'body_en',

    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make(trans('lang.user_name'), 'user_name')->rules('required'),
            Text::make(trans('lang.user_position'), 'user_position')->rules('required'),
            Rating::make(trans('lang.user_rate'), 'user_rate')->withStyles([
                'star-size' => 30,
                'active-color' => 'var(--warning)', // Primary nova theme color.
                'inactive-color' => '#d8d8d8',
                'border-color' => 'var(--60)',
                'border-width' => 0,
                'padding' => 10,
                'rounded-corners' => false,
                'inline' => false,
                'glow' => 0,
                'glow-color' => '#fff',
                'text-class' => 'inline-block text-80 h-9 pt-2',
            ])->min(0)->max(5)->increment(1)->rules('required'),
            Trix::make(trans('lang.body_ar'), 'body_ar')->rules('required'),
            Trix::make(trans('lang.body_en'), 'body_en')->rules('required'),
            Avatar::make(trans('lang.user_image'), 'user_image')->creationRules('required'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
