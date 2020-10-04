public function store(Request $request)
{
	if($request->has('technologies')) {
            $technologies = $request['technologies'];
            $technologies = explode(',', $technologies);
            if (count($technologies) > 0) {
                for ($d = 0; $d < count($technologies); $d++) {
                    //store each element
                }
            }
        }
}