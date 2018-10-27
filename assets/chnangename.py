import os
path = "zegna"
for f in os.walk(path):
    files =  f[-1]
    print files
    for i in files:
        rpath =  os.path.realpath(path)+"/"
        oldname = os.path.realpath(rpath+i)
        if os.path.exists(oldname):
            print os.path.realpath(oldname)
            print "check"
            if "-" in i:
                #namenew = os.path.realpath(rpath+i.replace("-", "_"))
            
                #os.rename(oldname, namenew)
                pass
            if " " in i:    
                namenew = os.path.realpath(rpath+i.replace(" ", "_"))
          
                #os.rename(oldname, namenew)
