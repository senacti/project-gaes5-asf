from django.shortcuts import render

def index(request):
    return render(request, 'index.html', {
        # context
    })

def garantias(request):
    return render(request, 'garantias.html', {
        # context
    })

def gform(request):
    return render(request, 'gform.html', {
        # context
    })