<?php

namespace App\Http\Controllers;

use rndrmu\StatamicMetatags\DefaultMetatags;
use rndrmu\StatamicMetatags\Metatags;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Statamic\Facades\Blueprint;
use Statamic\Support\Arr;

class DefaultsController extends Controller
{
    public function edit()
    {
        $blueprint = $this->blueprint();
        $fields = $blueprint->fields()
            ->addValues(DefaultMetatags::make()->values())
            ->preProcess();

        return view('statamic-metatags::defaults.edit', [
            'title' => __('Defaults'),
            'action' => cp_route('metatags.defaults.update'),
            'blueprint' => $blueprint->toPublishArray(),
            'meta' => $fields->meta(),
            'values' => $fields->values(),
        ]);
    }

    public function update(Request $request)
    {
        $blueprint = $this->blueprint();
        $fields = $blueprint->fields()
            ->addValues($request->all());

        $fields->validate();

        $values = Arr::removeNullValues($fields->process()->values()->all());

        DefaultMetatags::make($values)->save();

        return redirect()->back()->with('success', 'Defaults updated successfully.');
    }

    private function blueprint()
    {
        return Blueprint::make()
            ->setContents([
                'sections' => [
                    'main' => [
                        'fields' => Metatags::make()->features(),
                    ],
                ],
            ]);
    }
}
